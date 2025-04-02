<x-layouts.layout>

<script defer>
    document.addEventListener("DOMContentLoaded", function() {
        gsap.from(".title", { 
            opacity: 0, 
            y: -50,
            x: -100, 
            duration: 1 
        });

        gsap.from(".paragraph", { 
            opacity: 0, 
            x: -100, 
            duration: 1, 
            delay: 0.5 
        });
    });
</script>
    <h1 class="title text-3xl font-bold">Hello, Im Tadeas.</h1>
    <p class="paragraph text-lg mt-4 w-1/4">Lorem ipsum dolor sit amet consectetur, bradipisicing elit. <br> Inventore officiis dolorem nobis quibusdam repellat velit, accusamus eligendi eius non praesentium, a nemo vitae deserunt sit, maxime assumenda nesciunt illo eos.</p>



</x-layouts.layout>
