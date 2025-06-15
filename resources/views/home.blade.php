@extends('layouts.app')

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // === Animasi Scroll ===
    const animateOnScroll = (elements, className) => {
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            if (elementPosition < screenPosition) {
                element.classList.add(className);
            }
        });
    };

    const sections = document.querySelectorAll('section');
    const projectCards = document.querySelectorAll('.creative-card');
    animateOnScroll(sections, 'animate-fadeIn');
    animateOnScroll(projectCards, 'animate-fadeIn');
    window.addEventListener('scroll', () => {
        animateOnScroll(sections, 'animate-fadeIn');
        animateOnScroll(projectCards, 'animate-fadeIn');
    });

    // === Smooth Scroll Anchor ===
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // === Contact Form Submission ===
    const form = document.getElementById('contactForm');
    const notification = document.getElementById('notification');

    if (form && notification) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (response.ok) {
                    form.reset();
                    notification.style.display = 'flex';

                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 3000);
                } else {
                    alert('Failed to send message. Please try again.');
                }
            } catch (error) {
                alert('Error occurred. Please try again.');
            }
        });
    }
});
</script>
@endpush
