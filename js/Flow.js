{/* <script> */}
// Initialize VANTA NET effect with optimized settings
VANTA.NET({
    el: "#vanta-bg",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x00f5a0,
    backgroundColor: 0x030712,
    points: 10.00, // Reduced for better performance
    maxDistance: 20.00, // Reduced for better performance
    spacing: 20.00 // Increased for better performance
});

// GSAP Animations
gsap.registerPlugin(ScrollTrigger);

// Hero content animation
gsap.from("#hero-content", {
    opacity: 0,
    y: 50,
    duration: 1.2,
    ease: "power4.out"
});

// Stats cards animation
gsap.from(".stats-card", {
    opacity: 0,
    x: 100,
    duration: 1,
    stagger: 0.2,
    ease: "power4.out",
    delay: 0.5
});

// Scroll animations
gsap.utils.toArray('.stats-card').forEach((card, i) => {
    gsap.from(card, {
        scrollTrigger: {
            trigger: card,
            start: "top bottom",
            end: "top center",
            scrub: 1
        },
        y: 50,
        opacity: 0.5
    });
});

// Number counter animation
function animateValue(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);

        if (element.dataset.value === end.toString()) {
            element.textContent = `$${currentValue}B+`;
        } else if (element.dataset.value.includes('K')) {
            element.textContent = `${currentValue}K+`;
        } else {
            element.textContent = `${currentValue}%`;
        }

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Intersection Observer for stats cards
const statsCards = document.querySelectorAll('.stats-card');
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
};

const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Add entrance animation
            gsap.from(entry.target, {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power3.out"
            });

            // Start counter animation
            const counter = entry.target.querySelector('.number-counter');
            if (counter) {
                const value = parseInt(counter.dataset.value);
                animateValue(counter, 0, value, 2000);
            }

            // Unobserve after animation
            statsObserver.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe each stats card
statsCards.forEach(card => {
    statsObserver.observe(card);
});

// Hover effect for stats cards
statsCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        gsap.to(card.querySelector('svg'), {
            rotate: 360,
            duration: 0.6,
            ease: "power2.out"
        });
    });
});

// GSAP ScrollTrigger for stats section
gsap.from(".stats-card", {
    scrollTrigger: {
        trigger: ".stats-card",
        start: "top bottom",
        end: "bottom center",
        toggleActions: "play none none reverse"
    },
    y: 100,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "power3.out"
});

// Three.js Background Animation
const initThreeBackground = () => {
    const canvas = document.getElementById('fintech-bg');
    const renderer = new THREE.WebGLRenderer({
        canvas,
        antialias: true,
        alpha: true
    });

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 5;

    // Create particles
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 5000;
    const posArray = new Float32Array(particlesCount * 3);

    for (let i = 0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 10;
    }

    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

    // Custom shader material
    const particlesMaterial = new THREE.ShaderMaterial({
        vertexShader: `
            varying vec2 vUv;
            void main() {
                vUv = uv;
                vec4 mvPosition = modelViewMatrix * vec4(position, 1.0);
                gl_PointSize = 2.0 * (1.0 / -mvPosition.z);
                gl_Position = projectionMatrix * mvPosition;
            }
        `,
        fragmentShader: `
            varying vec2 vUv;
            void main() {
                float strength = 1.0 - (gl_PointCoord.x * 2.0 - 1.0) * (gl_PointCoord.x * 2.0 - 1.0);
                gl_FragColor = vec4(0.0, 0.96, 0.63, strength * 0.5);
            }
        `,
        transparent: true,
        blending: THREE.AdditiveBlending
    });

    const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
    scene.add(particlesMesh);

    // Animation
    const clock = new THREE.Clock();

    const animate = () => {
        const elapsedTime = clock.getElapsedTime();

        particlesMesh.rotation.y = elapsedTime * 0.1;
        particlesMesh.rotation.x = elapsedTime * 0.05;

        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    };

    // Responsive canvas
    const handleResize = () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    };

    window.addEventListener('resize', handleResize);
    handleResize();
    animate();
};

// Trading Chart Animation
const initTradingChart = () => {
    const canvas = document.getElementById('trading-chart');
    const ctx = canvas.getContext('2d');

    const points = [];
    const maxPoints = 50;

    for (let i = 0; i < maxPoints; i++) {
        points.push(Math.sin(i * 0.1) * 20 + 50);
    }

    const drawChart = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        ctx.beginPath();
        ctx.moveTo(0, points[0]);

        for (let i = 1; i < points.length; i++) {
            ctx.lineTo(i * (canvas.width / maxPoints), points[i]);
        }

        ctx.strokeStyle = '#00F5A0';
        ctx.lineWidth = 2;
        ctx.stroke();
    };

    const updateChart = () => {
        points.shift();
        points.push(Math.sin(Date.now() * 0.001) * 20 + 50);
        drawChart();
        requestAnimationFrame(updateChart);
    };

    updateChart();
};

// Initialize everything
document.addEventListener('DOMContentLoaded', () => {
    initThreeBackground();
    initTradingChart();
});
{/* </script> */}


{/* <script> */}
let scene, camera, renderer, particles;

function init() {
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
  renderer = new THREE.WebGLRenderer({ alpha: true });
  
  const container = document.getElementById('visualization-container');
  renderer.setSize(container.clientWidth, container.clientHeight);
  container.appendChild(renderer.domElement);
  
  const particleGeometry = new THREE.BufferGeometry();
  const particleCount = 1000;
  const positions = new Float32Array(particleCount * 3);
  const colors = new Float32Array(particleCount * 3);
  
  for(let i = 0; i < particleCount * 3; i += 3) {
    positions[i] = (Math.random() - 0.5) * 100;
    positions[i + 1] = (Math.random() - 0.5) * 100;
    positions[i + 2] = (Math.random() - 0.5) * 100;
    
    colors[i] = Math.random() * 0.3;
    colors[i + 1] = Math.random() * 0.8;
    colors[i + 2] = Math.random() * 0.5;
  }
  
  particleGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
  particleGeometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
  
  const particleMaterial = new THREE.PointsMaterial({
    size: 0.2,
    vertexColors: true,
    transparent: true,
    opacity: 0.8
  });
  
  particles = new THREE.Points(particleGeometry, particleMaterial);
  scene.add(particles);
  
  camera.position.z = 50;
  
  animate();
}

function animate() {
  requestAnimationFrame(animate);
  
  particles.rotation.x += 0.0005;
  particles.rotation.y += 0.0005;
  
  const positions = particles.geometry.attributes.position.array;
  for(let i = 0; i < positions.length; i += 3) {
    positions[i] += Math.sin(Date.now() * 0.001 + i) * 0.01;
    positions[i + 1] += Math.cos(Date.now() * 0.001 + i) * 0.01;
  }
  particles.geometry.attributes.position.needsUpdate = true;
  
  renderer.render(scene, camera);
}

window.addEventListener('resize', () => {
  const container = document.getElementById('visualization-container');
  camera.aspect = container.clientWidth / container.clientHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(container.clientWidth, container.clientHeight);
});

window.addEventListener('load', init);
// </script>







