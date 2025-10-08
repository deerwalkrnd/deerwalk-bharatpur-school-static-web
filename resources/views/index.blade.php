<!DOCTYPE html>
<html lang="en" class="hydrated">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deerwalk Bharatpur School</title>
    @vite('resources/css/app.css')
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
* {
    font-family: 'Poppins';
}
</style>
</head>
<!-- <div id="popup-background" class="popup-background" style="display: flex; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px); z-index: 1000; justify-content: center; align-items: center;">
    <div id="popup" class="popup" style="display: flex; justify-content:center;align-items:center;width:100%; z-index:1001;">
        <div class="popup-content" style="width: 40%; position: relative;">
            <button class="closebtn" onclick="hidePopup()" style="position: absolute; top: 10px; right: 10px; z-index: 1002;"><b>X</b></button>
            <img src="https://DPS.deerwalk.edu.np/pictures/Admission.png" alt="Admission" style="width: 100%">
            
        </div>
    </div>
</div> -->


<body class="overflow-x-hidden">
    <header class="bg-[#4F65DE] sticky top-0 z-10 shadow-md">
        <nav class="flex justify-between items-center h-16 md:h-20 px-4 md:px-8">
            <a target="_self" href="/" class="w-36 h-16">
                <img src="{{ asset('logo/white.png') }}" alt="Logo" class="h-full object-contain">
            </a>
            <button id="hamburger" class="block lg:hidden p-4 focus:outline-none">
                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div id="nav-links" class="hidden lg:flex flex-grow items-center justify-end space-x-6 lg:space-x-8">
                <div class="relative groupclass">
                    <!-- <a href="#" id="aboutUsLink" class="font-medium text-black hover:text-primary">About Us</a> -->
                    <!-- <div class="absolute left-0 hidden group-hover:flex flex-col shadow-md border border-gray-300 bg-white w-40 mt-2 rounded-md">
                        <a href="#whyDPS" class="px-4 py-2 font-body text-black hover:bg-primary hover:text-white">Why DPS</a>
                        <a href="#Management" class="px-4 py-2 font-body text-black hover:bg-primary hover:text-white">Management</a>
                        <a href="#Units" class="px-4 py-2 font-body text-black hover:bg-primary hover:text-white">Our Units</a>
                    </div> -->
                </div>
                <a href="#Academics" class="font-medium text-white hover:text-primary">Academics</a>
                <a href="#Admission" class="font-medium text-white hover:text-primary">Admission</a>
                <a href="#Courses" class="font-medium text-white hover:text-primary">Courses</a>
                <a href="#Footer" class="font-medium text-white hover:text-primary">Contact</a>
            </div>
        </nav>

        <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-md border-t border-gray-300">
            <a href="#Academics" class="block px-4 py-2 font-medium text-black hover:bg-primary hover:text-white">Academics</a>
            <a href="#Admission" class="block px-4 py-2 font-medium text-black hover:bg-primary hover:text-white">Admission</a>
            <a href="#Courses" class="block px-4 py-2 font-medium text-black hover:bg-primary hover:text-white">Courses</a>
            <a href="#Footer" class="block px-4 py-2 font-medium text-black hover:bg-primary hover:text-white">Contact</a>
            <div class="relative group">
                <button class="block w-full text-left px-4 py-2 font-medium text-black hover:bg-primary hover:text-white focus:outline-none">About Us</button>
                <div class="hidden group-hover:block ml-4 border-l-2 border-gray-200">
                    <a href="#whyDPS" class="block px-4 py-2 font-body text-black hover:bg-primary hover:text-white">Why DPS</a>
                    <a href="#Management" class="block px-4 py-2 font-body text-black hover:bg-primary hover:text-white">Management</a>
                    <a href="#Units" class="block px-4 py-2 font-body text-black hover:bg-primary hover:text-white">Our Units</a>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('hamburger').addEventListener('click', function() {
                var navLinks = document.getElementById('mobile-menu');
                navLinks.classList.toggle('hidden');
            });
            function hidePopup() {
            document.getElementById("popup").style.display = "none";
            }

        </script>
    </header>

    
    <div class="relative w-full h-screen overflow-hidden" id="carousel">
    <!-- Carousel Slides -->
    <div class="w-full h-full">
        <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out z-10 opacity-100" data-slide="0">
            <img src="{{ asset('upload/heropage.png') }}" alt="Bharatpur landscape" class="object-cover h-screen w-screen">
        </div>
        <!-- <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out z-10 opacity-0" data-slide="1">
            <img src="{{ asset('upload/carouselII.png') }}" alt="Second slide" class="object-cover h-screen w-screen">
        </div>
        <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-500 ease-in-out z-10 opacity-0" data-slide="2">
            <img src="{{ asset('upload/carousel1.png') }}" alt="Third slide" class="object-cover h-screen w-screen">
        </div> -->
    </div>
    
    <!-- Navigation arrows -->
    <!-- <button class="absolute top-1/2 left-4 -translate-y-1/2 w-12 h-12 bg-black/30 hover:bg-black/50 rounded-full flex items-center justify-center z-30 cursor-pointer border-none text-white transition-colors duration-300" id="prevButton" aria-label="Previous slide">
        <i class="text-xl">&larr;</i>
    </button>
    <button class="absolute top-1/2 right-4 -translate-y-1/2 w-12 h-12 bg-black/30 hover:bg-black/50 rounded-full flex items-center justify-center z-30 cursor-pointer border-none text-white transition-colors duration-300" id="nextButton" aria-label="Next slide">
        <i class="text-xl">&rarr;</i>
    </button> -->
</div>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('[data-slide]');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const carousel = document.getElementById('carousel');
        
        let currentIndex = 0;
        let isTransitioning = false;
        let autoplayInterval;
        
        function showSlide(index) {
            if (isTransitioning) return;
            
            isTransitioning = true;
            const normalizedIndex = ((index % slides.length) + slides.length) % slides.length;
            
            slides.forEach(slide => slide.classList.remove('opacity-100'));
            slides.forEach(slide => slide.classList.add('opacity-0'));
            
            slides[normalizedIndex].classList.remove('opacity-0');
            slides[normalizedIndex].classList.add('opacity-100');
            
            currentIndex = normalizedIndex;
            
            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }
        
        function goToPrevSlide() {
            showSlide(currentIndex - 1);
        }

        function goToNextSlide() {
            showSlide(currentIndex + 1);
        }
        
        prevButton.addEventListener('click', goToPrevSlide);
        nextButton.addEventListener('click', goToNextSlide);
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                goToPrevSlide();
            } else if (e.key === 'ArrowRight') {
                goToNextSlide();
            }
        });
        
        let touchStartX = 0;
        let touchEndX = 0;
        
        carousel.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoplay();
        });
        
        carousel.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            if (touchEndX < touchStartX - 50) {
                goToNextSlide();
            } else if (touchEndX > touchStartX + 50) {
                goToPrevSlide();
            }
            startAutoplay();
        });
        
        function startAutoplay() {
            autoplayInterval = setInterval(goToNextSlide, 3000);
        }
        
        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }
        
        startAutoplay();
        
        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);
    });
</script> -->



<section class="pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24 flex justify-center" id="Academics">
    <div class="flex flex-col gap-7 sm:gap-10 md:gap-12 lg:gap-16 xl:gap-16 overflow-x-hidden">
        <div class="flex justify-center items-center">
            <h1 class="text-primary font-bold text-2xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl">Our Schools</h1>
        </div>
        <div class="flex flex-col justify-center items-center w-screen gap-8 sm:gap-14 lg:gap-20 xl:flex-row xl:gap-14 2xl:gap-32">
            <!-- Elementary School Card -->
            <!-- <div class="cursor-pointer">
                <div class="relative bg-primary rounded-xl w-[14rem] h-[16rem] sm:h-[26.8rem] sm:w-[20rem] lg:h-[30.5rem] lg:w-[24rem] xl:w-[23rem] xl:h-[30.9rem] 2xl:w-[19rem] 2xl:h-[28rem]">
                    <div class="absolute bottom-2 right-2">
                        <img src="{{asset('upload/Primary School.jpg')}}" class="rounded-t-xl h-[11.5rem] w-full sm:h-[17.9rem] lg:h-[20.5rem] xl:h-[20.5rem] 2xl:h-[21.5rem] object-cover">
                        <div class="absolute h-[11.5rem] sm:h-[17.9rem] lg:h-[20.6rem] xl:h-[20.5rem] 2xl:h-[21.5rem] w-full bg-black/40 flex items-center justify-center bottom-[4.5rem] sm:bottom-[8.8rem] md:bottom-[8.8rem] lg:bottom-[10rem] xl:bottom-[10.2rem] 2xl:bottom-[6.5rem] rounded-t-xl opacity-0 hover:opacity-100 transition-all duration-300">
                            <p class="text-white font-bold text-lg sm:text-2xl md:text-4xl lg:text-4xl">Nursery to 3</p>
                        </div>
                        <div class="bg-sky-100 flex justify-center rounded-b-lg">
                            <h1 class="py-6 lg:py-16 sm:py-14 2xl:py-9 font-bold text-base sm:text-xl lg:text-2xl xl:text-2xl 2xl:text-2xl text-primary">Elementary School</h1>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Middle School Card -->
            <div class="cursor-pointer">
                <div class="relative bg-primary rounded-xl w-[14rem] h-[16rem] sm:h-[26.8rem] sm:w-[20rem] lg:h-[30.5rem] lg:w-[24rem] xl:w-[23rem] xl:h-[30.9rem] 2xl:w-[19rem] 2xl:h-[28rem]">
                    <div class="relative bottom-2 right-2">
                        <img src="{{asset('upload/junior.jpg')}}" class="rounded-t-xl h-[11.5rem] w-full sm:h-[17.9rem] lg:h-[20.5rem] xl:h-[20.5rem] 2xl:h-[21.3rem] object-cover">
                        <div class="absolute h-[11.5rem] sm:h-[17.9rem] lg:h-[20.6rem] xl:h-[20.5rem] 2xl:h-[21.3rem] w-full bg-black/40 flex items-center justify-center bottom-[4.5rem] sm:bottom-[8.5rem] md:bottom-[8.8rem] lg:bottom-[10rem] xl:bottom-[10.2rem] 2xl:bottom-[6.5rem] rounded-t-xl opacity-0 hover:opacity-100 transition-all duration-300">
                        <p class="text-white font-bold text-sm sm:text-lg md:text-xl lg:text-2xl">Nursery to Grade 3</p>
                        </div>
                        <div class="bg-sky-100 flex justify-center rounded-b-lg">
                            <h1 class="py-6 lg:py-16 sm:py-14 2xl:py-9 font-bold text-base sm:text-xl lg:text-2xl xl:text-2xl text-primary">Junior School</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- High School Card -->
            <div class="cursor-pointer">
                <div class="relative bg-primary rounded-xl w-[14rem] h-[16rem] sm:h-[26.8rem] sm:w-[20rem] lg:h-[30.5rem] lg:w-[24rem] xl:w-[23rem] xl:h-[30.9rem] 2xl:w-[19rem] 2xl:h-[28rem]">
                    <div class="relative bottom-2 right-2">
                        <img src="{{asset('upload/senior.jpg')}}" class="rounded-t-xl h-[11.5rem] w-full sm:h-[17.9rem] lg:h-[20.5rem] xl:h-[20.5rem] 2xl:h-[21.3rem] object-cover">
                        <div class="absolute h-[11.5rem] sm:h-[17.9rem] lg:h-[20.6rem] xl:h-[20.5rem] 2xl:h-[21.3rem] w-full bg-black/40 flex items-center justify-center bottom-[4.5rem] sm:bottom-[8.8rem] md:bottom-[8.8rem] lg:bottom-[10rem] xl:bottom-[10.2rem] 2xl:bottom-[6.5rem] rounded-t-xl opacity-0 hover:opacity-100 transition-all duration-300">
                        <p class="text-white font-bold text-sm sm:text-lg md:text-xl lg:text-2xl">Grade 5 to 12</p>
                        </div>
                        <div class="bg-sky-100 flex justify-center rounded-b-lg">
                            <h1 class="py-6 lg:py-16 sm:py-14 2xl:py-9 font-bold text-base sm:text-xl lg:text-2xl xl:text-2xl text-primary">Senior School</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="flex justify-center pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24" id="whyDPS">
    <div class="flex flex-col gap-7 sm:gap-10 md:gap-12 lg:gap-14 xl:gap-16">
        <h1 class="text-primary font-arialBold font-bold text-2xl text-center md:text-4xl xl:text-4xl">Why Choose Deerwalk Bharatpur School?</h1>
        <div class="lg:block block">
            <div class="hidden lg:flex flex-col gap-6 lg:gap-3 xl:gap-4">
                <!-- Desktop view -->
                <div class="flex flex-col gap-6 lg:flex-row lg:gap-3 xl:flex-row xl:gap-4">
                    <div class="flex flex-col gap-5 xl:gap-5 2xl:gap-5 md:p-10 lg:p-7 xl:p-9 2xl:p-9 border-8 border-primary rounded-3xl w-[15rem] h-[17rem] sm:w-[28rem] sm:h-[16rem] md:w-[40rem] md:h-[23rem] lg:w-[30rem] lg:h-[18rem] xl:w-[36rem] xl:h-[19rem] 2xl:w-[36rem] 2xl:h-[18rem]">
                        <div class="flex flex-row justify-between">
                            <h1 class="font-arialBold text-primary text-2xl md:text-3xl lg:text-2xl 2xl:text-2xl">Essential Skills</h1>
                            <img src="{{asset('icon/skills.png')}}" class="h-[2rem] sm:h-[1.8rem] md:h-[2rem] xl:h-[2.7rem] 2xl:h-[2.3rem]" alt="skills">
                        </div>
                        <div>
                            <p class="font-arialRegular lg:text-normal text-justify">
                                Deerwalk Bharatpur School believes in equipping its students with all the necessary essential skills.
                                These skills encompass active listening, adherence to the 5 R’s of DPS (showing respect for everyone, maintaining a neat dress code,
                                and upholding a zero-tolerance policy against bullying, sexist language, and dishonesty).
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 xl:gap-5 2xl:gap-5 md:p-10 lg:p-7 xl:p-9 2xl:p-9 bg-primary rounded-3xl border-8 border-primary w-[20rem] h-[19rem] sm:w-[28rem] sm:h-[16rem] md:w-[40rem] md:h-[23rem] lg:w-[30rem] lg:h-[18rem] xl:w-[36rem] xl:h-[19rem] 2xl:w-[36rem] 2xl:h-[18rem]">
                        <div class="flex flex-row justify-between">
                            <h1 class="font-arialBold text-2xl text-white md:text-3xl lg:text-2xl 2xl:text-2xl">Language Skills</h1>
                            <img src="{{asset('icon/language.png')}}" class="h-[2rem] sm:h-[1.8rem] md:h-[2rem] xl:h-[2.7rem] 2xl:h-[2.3rem]" alt="language">
                        </div>
                        <div>
                            <p class="text-white font-arialRegular lg:text-normal text-justify">
                                In terms of language proficiency, while English serves as the primary language, there are no penalties for speaking Nepali.
                                Sanskrit, recognized for its enduring nature and its foundational role in coding languages and speech therapy,
                                is also included in the language curriculum at Deerwalk Bharatpur School.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-5 lg:flex-row lg:gap-3 xl:flex-row  xl:gap-5">
                    <div class="flex flex-col gap-5 2xl:gap-6 lg:p-7 xl:p-9 2xl:p-9 border-primary border-8 rounded-3xl w-[20rem] h-[19rem] sm:w-[28rem] sm:h-[16rem] md:w-[32rem] md:h-[20rem] lg:w-[30rem] lg:h-[18rem] lg:bg-primary xl:w-[36rem] xl:h-[19rem] 2xl:w-[36rem] 2xl:h-[18rem] ">
                        <div class="flex flex-row justify-between">
                            <h1 class="font-arialBold font-bold text-2xl md:text-3xl lg:text-2xl 2xl:text-2xl text-primary lg:text-white">Academic Fundamentals</h1>
                            <img src="{{asset('icon/book-white.png')}}" class="h-[2.5rem] sm:h-[1.8rem] md:h-[2rem] xl:h-[2.7rem] 2xl:h-[2.3rem] hidden lg:block" alt="book">
                        </div>
                        <div>
                            <p class="text-white font-arialRegular lg:text-base text-justify">
                                The school places utmost importance on academic fundamentals such as handwriting,
                                completion of classwork and homework, maintaining a zero-tolerance stance against
                                plagiarism, and engaging in project work.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 2xl:gap-6 lg:p-7 xl:p-9 2xl:p-9 rounded-3xl lg:border-primary w-[20rem] h-[19rem] sm:w-[28rem] sm:h-[16rem] md:w-[32rem] md:h-[20rem] lg:w-[30rem] lg:h-[18rem] lg:border-8 xl:w-[36rem] xl:h-[19rem] 2xl:w-[36rem] 2xl:h-[18rem]">
                        <div class="flex flex-row justify-between">
                            <h1 class="font-arialBold text-2xl md:text-3xl lg:text-2xl 2xl:text-2xl  lg:text-primary">Extra Curricular Activities</h1>
                            <img src="{{asset('icon/flask.png')}}" class="h-[2.5rem] sm:h-[1.8rem] md:h-[2rem] xl:h-[2.7rem] 2xl:h-[2.3rem] hidden lg:block" alt="flask">
                        </div>
                        <div>
                            <p class="text-black font-arialRegular lg:text-base text-justify">
                                Deerwalk Bharatpur School champions holistic development through a diverse range of extracurricular activities (ECA),
                                including student clubs categorized as exclusive and inclusive.
                                These clubs offer students opportunities for personal growth, leadership development, and overall enrichment alongside their academic pursuits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block lg:hidden">
                <!-- Mobile and tablet view -->
                <div class="flex flex-col gap-3 sm:gap-8 md:gap-8 lg:gap-3 xl:gap-4">
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-3 sm:gap-8 lg:flex-row lg:gap-3 xl:flex-row xl:gap-4">
                        <div class="flex flex-col gap-5 p-5 border-4 rounded-xl sm:p-5 md:p-6 sm:border-8 border-primary lg:rounded-3xl w-[13rem] max-h-[17rem] sm:w-[15rem] sm:h-[17rem] md:w-[23rem] md:h-[14rem]">
                            <div class="flex flex-row justify-between">
                                <h1 class="font-arialBold font-bold text-base sm:text-xl text-primary md:text-3xl">Essential Skills</h1>
                                <img src="{{asset('icon/skills.png')}}" class="ml-2 h-[1.6rem] sm:h-[1.8rem] sm:mt-0.5 md:h-[2rem] md:mt-0 xl:pr-9 xl:mr-4 xl:h-[2.1rem]" alt="skills">
                            </div>
                            <div class="overflow-auto">
                                <p class="font-arialRegular font-medium text-left text-xs sm:text-sm">
                                    Deerwalk Bharatpur School believes in equipping its students with essential skills crucial for both academic success and overall growth and development.
                                    These skills encompass active listening, adherence to the 5 R’s of DSS (showing respect for everyone), maintaining a neat dress code, and upholding a zero-tolerance policy against bullying, sexist language, and dishonesty.
                                    The school places significant emphasis on these skills as they play a vital role in creating a positive and inclusive learning environment conducive to the thriving of every student.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-5 p-5 sm:p-5 md:p-6 bg-primary rounded-xl lg:rounded-3xl border-4 sm:border-8 border-primary w-[13rem] max-h-[17rem] sm:w-[15rem] sm:h-[17rem] md:w-[23rem] md:h-[14rem]">
                            <div class="flex flex-row justify-between">
                                <h1 class="font-arialBold font-bold text-base sm:text-xl text-white md:text-3xl">Language Skills</h1>
                                <img src="{{asset('icon/language.png')}}" class="h-[1.6rem] ml-2 sm:h-[1.8rem] sm:mt-0.5 md:h-[2rem] md:mt-0" alt="language">
                            </div>
                            <div class="overflow-auto">
                                <p class="text-white font-arialRegular font-medium text-xs sm:text-sm text-left">
                                    In terms of language proficiency, Deerwalk Bharatpur School advocates for the learning of multiple languages.
                                    While English serves as the primary language for instruction and communication, with students mandated to read one English book monthly, there are no penalties for speaking Nepali, thereby fostering an appreciation for the native language.
                                    Additionally, students are encouraged to read one Nepali book monthly. Sanskrit, recognized for its enduring nature and its foundational role in coding languages and speech therapy, is also included in the language curriculum at Deerwalk Bharatpur School.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-8 lg:flex-row lg:gap-3 xl:flex-row xl:gap-4">
                        <div class="flex flex-col gap-5 p-5 sm:p-5 md:p-6 border-primary border-4 sm:border-8 rounded-xl lg:rounded-3xl w-[13rem] max-h-[17rem] overflow-auto sm:w-[15rem] sm:h-[17rem] md:w-[23rem] md:h-[14rem]">
                            <div class="flex flex-row justify-between">
                                <h1 class="font-arialBold font-bold text-base sm:text-xl md:text-3xl text-primary">Academic Fundamentals</h1>
                                <img src="{{asset('icon/book-white.png')}}" class="h-[1.6rem] sm:h-[1.8rem] sm:mt-0.5 md:h-[2rem]" alt="book">
                            </div>
                            <div class="overflow-auto">
                                <p class="font-arialRegular font-medium text-xs sm:text-sm text-left">
                                    The school places utmost importance on academic fundamentals such as handwriting, completion of classwork and homework, maintaining a zero-tolerance stance against plagiarism, and engaging in project work.
                                    Mastery of these fundamentals is deemed essential for academic success and future growth, forming the cornerstone of the academic experience at Deerwalk Bharatpur School.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-5 p-5 sm:p-5 md:p-6 rounded-lg lg:rounded-3xl bg-primary border-primary border-4 w-[13rem] max-h-[17rem] overflow-auto sm:w-[15rem] sm:h-[17rem] md:w-[23rem] md:h-[14rem]">
                            <div class="flex flex-row justify-between">
                                <h1 class="font-arialBold font-bold text-base sm:text-xl md:text-3xl text-white">Extra Curricular Activities</h1>
                                <!-- <img src="{{asset('upload/flask.png')}}" alt="flask" 
                                
                                class="h-[1.6rem] ml-2 sm:h-[1.8rem] sm:mt-0.5 md:h-[1.6rem] md:w-[1.6rem] mt-0"> -->
                                 <img src="{{asset('icon/flask.png')}}" alt="flask" 
                                
                                class="min-h-[2.25rem]">
                            </div>
                            <div class="overflow-auto">
                                <p class="text-white font-arialRegular font-medium text-xs sm:text-sm text-left">
                                    Deerwalk Bharatpur School champions holistic development through a diverse range of extracurricular activities (ECA), including student clubs categorized as exclusive and inclusive.
                                    These clubs offer students opportunities for personal growth, leadership development, and overall enrichment alongside their academic pursuits.
                                    Through active participation in these activities, students can explore their interests, cultivate new skills, forge enduring friendships, and enhance their overall educational journey at Deerwalk Bharatpur School.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="flex justify-center pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24">
    <div class="md:hidden w-full">
        <img src="{{asset('upload/Analytics.png')}}" class="object-cover w-full px-6">
    </div>
    <div class="hidden md:block">
        <img src="{{asset('upload/Analytics.png')}}" class="object-cover w-full px-16">
    </div>
</div> -->

<div class="flex flex-col gap-7 sm:gap-10 md:gap-12 lg:gap-14 xl:gap-16 justify-center pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24" id="Admission">
    <h1 class="text-2xl md:text-4xl xl:text-4xl font-bold text-center text-primary font-arialBold">Admission Procedure</h1>
    <div class="flex flex-col items-center sm:mt-1 lg:hidden">
        <!-- Mobile and tablet view -->
        <div class="flex flex-col gap-8 mx-12">
            <div class="flex flex-row items-center gap-7">
                <h1 class="text-5xl md:text-6xl font-bold text-primary font-arialBold">01</h1>
                <p class="text-sm md:text-lg font-semibold text-left font-arialRegular">Engage in Open House Sessions or Counselling</p>
            </div>
            <div class="flex flex-row items-center gap-7">
                <h1 class="text-5xl md:text-6xl font-bold text-primary font-arialBold">02</h1>
                <p class="text-sm md:text-lg font-semibold text-left font-arialRegular">Submit the Application Form</p>
            </div>
            <div class="flex flex-row items-center gap-7">
                <h1 class="text-5xl md:text-6xl font-bold text-primary font-arialBold">03</h1>
                <p class="text-sm md:text-lg font-semibold text-left font-arialRegular">Take the Deerwalk Aptitude Test (DAT)</p>
            </div>
            <div class="flex flex-row items-center gap-7">
                <h1 class="text-5xl md:text-6xl font-bold text-primary font-arialBold">04</h1>
                <p class="text-sm md:text-lg font-semibold text-left font-arialRegular">Participate in Parent-Teacher Interaction</p>
            </div>
            <div class="flex flex-row items-center gap-7">
                <h1 class="text-5xl md:text-6xl font-bold text-primary font-arialBold">05</h1>
                <p class="text-sm md:text-lg font-semibold text-left font-arialRegular">Receive Admission Open Letter</p>
            </div>
            <div class="flex flex-row items-center gap-7">
                <h1 class="text-5xl md:text-6xl font-bold text-primary font-arialBold">06</h1>
                <p class="text-sm md:text-lg lg:text-xl font-semibold text-left font-arialRegular">Confirm Admission</p>
            </div>
        </div>
    </div>
    <div class="hidden lg:flex lg:flex-row lg:justify-evenly lg:mx-6 2xl:ml-20">
        <!-- Desktop view -->
        <div class="flex flex-col gap-14 mx-6">
            <div class="flex flex-row items-center gap-8">
                <h1 class="text-7xl 2xl:text-7xl font-bold text-primary font-arialBold">01</h1>
                <p class="lg:text-xl 2xl:text-xl font-semibold font-arialRegular">Engage in Open House<br>Sessions or Counselling</p>
            </div>
            <div class="flex flex-row items-center gap-8">
                <h1 class="text-7xl 2xl:text-7xl font-bold text-primary font-arialBold">03</h1>
                <p class="lg:text-xl 2xl:text-xl font-semibold font-arialRegular">Take the Deerwalk<br>Aptitude Test (DAT)</p>
            </div>
            <div class="flex flex-row items-center gap-8">
                <h1 class="text-7xl 2xl:text-7xl font-bold text-primary font-arialBold">05</h1>
                <p class="lg:text-xl 2xl:text-xl font-semibold font-arialRegular">Receive Admission<br>Open Letter</p>
            </div>
        </div>
        <div class="flex flex-col gap-14 mx-10">
            <div class="flex flex-row items-center gap-8">
                <h1 class="text-7xl 2xl:text-7xl font-bold text-primary font-arialBold">02</h1>
                <p class="lg:text-xl 2xl:text-xl font-semibold font-arialRegular">Submit the Application<br>Form</p>
            </div>
            <div class="flex flex-row items-center gap-8">
                <h1 class="text-7xl 2xl:text-7xl font-bold text-primary font-arialBold">04</h1>
                <p class="lg:text-xl 2xl:text-xl font-semibold font-arialRegular">Participate in Parent-<br>Teacher Interaction</p>
            </div>
            <div class="flex flex-row items-center gap-8">
                <h1 class="text-7xl 2xl:text-7xl font-bold text-primary font-arialBold">06</h1>
                <p class="lg:text-xl 2xl:text-xl font-semibold font-arialRegular">Confirm Admission</p>
            </div>
        </div>
    </div>
</div>

<div class="pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24 2xl:pt-28" id="Management">
    <!-- Unified Parent Div -->
    <div class="overflow-x-hidden">
        <!-- Mobile and Tablet View -->
        <div class="flex flex-col gap-11 sm:gap-12 md:gap-14 lg:hidden">
            <!-- Founder's Greetings -->
            <div class="flex justify-center">
                <div class="flex flex-col gap-8 sm:gap-10 md:gap-12 text-center">
                    <h1 class="text-primary font-arialBold font-bold text-2xl md:text-4xl">Founder's Greetings</h1>
                    <img src="{{asset('upload/rudrasir.png')}}" class="rounded-full border-2 border-primary w-[14rem] h-[14rem] sm:w-[16rem] sm:h-[16rem] md:w-[20rem] md:h-[20rem] mx-auto object-cover">
                    <div class="overflow-auto max-h-[10rem]">
                        <p class="px-14 sm:px-16 md:px-24 font-arialRegular font-medium text-justify">
                            At Deerwalk Bharatpur School, we take a holistic approach to education. While we strive for excellence in academics, our mission extends beyond that: We teach our students the soft and hard skills they need to become confident and curious citizens of the world.
                            We focus on reading, writing and coding. Reading a range of texts — fiction, non-fiction, poetry and beyond — helps students expand their vocabularies and become clearer thinkers and writers.
                            Reading and writing skills go hand-in-hand. Students use what they’ve learned from reading to further hone their analytical and creative writing skills and become better communicators.
                            Coding teaches students the art of problem-solving and acquaints them with the technologies of the future — skills that will be key regardless of the career paths they choose.
                            Our educators recognize the moment: The pace of technological change is accelerating, and today’s students will need to be prepared for an increasingly unpredictable future. Our goal is to give them the skills and the tools to take on new challenges with intellect, agility and humanity.
                        </p>
                    </div>
                    <p class="font-arialBold font-bold text-lg md:text-xl">- Rudra Pandey<br>Founder</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        
        <div class="flex flex-col gap-11 sm:gap-12 md:gap-14 lg:hidden">


        <!-- Chairperson's Greetings -->

        <div class="flex justify-center">
                <div class="flex flex-col gap-8 sm:gap-10 md:gap-12 text-center">
                    <h1 class="text-primary font-arialBold font-bold text-2xl md:text-4xl">Chairperson's Greetings</h1>
                    <img src="{{asset('upload/hiteshsir.jpg')}}" class="rounded-full border-2 border-primary w-[14rem] h-[14rem] sm:w-[16rem] sm:h-[16rem] md:w-[20rem] md:h-[20rem] mx-auto object-cover">
                    <div class="overflow-auto max-h-[10rem]">
                        <p class="px-14 sm:px-16 md:px-24 font-arialRegular font-medium text-justify">
                        Deerwalk Bharatpur School, the second school established by the Deerwalk Group, is dedicated to providing an exceptional educational experience to the people of Bharatpur, an opportunity previously centered around Kathmandu. 
                        With a super clean and green campus, excellent facilities, and highly trained teachers, the school strives to create a meaningful learning environment. 
                        Inspired by Deerwalk's philosophy of empowering students to excel in their chosen fields, we place a strong emphasis on developing skills in reading, writing, and coding. 
                        We firmly believe these skills enable our students to effectively articulate their ideas—both in written and spoken formats—and enhance their problem-solving abilities. 
                        Uniquely, our school does not enforce uniforms, reflecting our commitment to nurturing the individuality of each student. 
                        We believe our role is to foster an environment that supports the personal and intellectual growth of every learner.
                        </p>
                    </div>
                    <p class="font-arialBold font-bold text-lg md:text-xl">- Hitesh Karki<br>Chairperson</p>
                </div>
            </div>
        </div>

        <!-- Desktop View (Fixed) -->
        <div class="hidden lg:flex flex-col items-center justify-center gap-16 lg:gap-16 xl:gap-16 2xl:gap-24 mx-20">
            <!-- Founder's Greetings -->
            <div class="flex flex-col items-center gap-10 xl:gap-14 text-center">
                <h1 class="text-primary font-arialBold font-bold text-4xl">Founder's Greetings</h1>
                <div class="flex flex-col items-center gap-8 xl:gap-10">
                    <img src="{{asset('upload/rudrasir.png')}}" class="rounded-full border-4 border-primary lg:w-[15rem] lg:h-[15rem] xl:w-[19rem] xl:h-[19rem] 2xl:w-[24rem] 2xl:h-[24rem] object-cover">
                    <p class="text-justify font-arialRegular font-medium xl:text-lg 2xl:text-lg">
                        At Deerwalk Bharatpur School, we take a holistic approach to education. While we strive for excellence in academics, our mission extends beyond that: We teach our students the soft and hard skills they need to become confident and curious citizens of the world.
                        We focus on reading, writing and coding. Reading a range of texts — fiction, non-fiction, poetry and beyond — helps students expand their vocabularies and become clearer thinkers and writers.
                        Reading and writing skills go hand-in-hand. Students use what they’ve learned from reading to further hone their analytical and creative writing skills and become better communicators.
                        Coding teaches students the art of problem-solving and acquaints them with the technologies of the future — skills that will be key regardless of the career paths they choose.
                        Our educators recognize the moment: The pace of technological change is accelerating, and today’s students will need to be prepared for an increasingly unpredictable future. Our goal is to give them the skills and the tools to take on new challenges with intellect, agility and humanity.
                    </p>
                    <p class="font-arialBold font-semibold text-xl">- Rudra Pandey, Founder</p>
                </div>
            </div>

            <!-- Chairperson's Greetings -->
            <div class="flex flex-col items-center gap-10 xl:gap-14 text-center">
                <h1 class="text-primary font-arialBold font-bold text-4xl">Chairperson's Greetings</h1>
                <div class="flex flex-col items-center gap-8 xl:gap-10">
                    <img src="{{asset('upload/hiteshsir.jpg')}}" class="rounded-full border-4 border-primary lg:w-[15rem] lg:h-[15rem] xl:w-[19rem] xl:h-[19rem] 2xl:w-[24rem] 2xl:h-[24rem] object-cover">
                    <p class="text-justify font-arialRegular font-medium xl:text-lg 2xl:text-lg">
                        Deerwalk Bharatpur School, the second school established by the Deerwalk Group, is dedicated to providing an exceptional educational experience to the people of Bharatpur, an opportunity previously centered around Kathmandu. 
                        With a super clean and green campus, excellent facilities, and highly trained teachers, the school strives to create a meaningful learning environment. 
                        Inspired by Deerwalk's philosophy of empowering students to excel in their chosen fields, we place a strong emphasis on developing skills in reading, writing, and coding. 
                        We firmly believe these skills enable our students to effectively articulate their ideas—both in written and spoken formats—and enhance their problem-solving abilities. 
                        Uniquely, our school does not enforce uniforms, reflecting our commitment to nurturing the individuality of each student. 
                        We believe our role is to foster an environment that supports the personal and intellectual growth of every learner.
                    </p>
                    <p class="font-arialBold font-semibold text-xl">- Hitesh Karki, Chairperson</p>
                </div>
            </div>

            <!-- Principal's Message -->
            <!-- <div class="flex flex-col pt-8 items-center gap-10 xl:gap-14 text-center">
                <h1 class="text-primary font-arialBold font-bold text-4xl">Principal's Message</h1>
                <div class="flex flex-col items-center gap-8 xl:gap-10">
                    <img src="{{asset('upload/Nirmal_sir.png')}}" class="rounded-full border-4 border-primary lg:w-[15rem] lg:h-[15rem] xl:w-[19rem] xl:h-[19rem] 2xl:w-[24rem] 2xl:h-[24rem] object-cover">
                    <p class="text-justify font-arialRegular font-semibold xl:text-lg 2xl:text-lg">
                        Deerwalk Bharatpur School (DPS) is committed to fostering a culture of learning and inspiration.
                        Our campus community places a strong emphasis on knowledge acquisition while upholding high standards in academics.
                        We focus on four key pillars: Essential Skills, Language Proficiency, Academic Foundations, and Excellence in Extracurricular Activities (ECA), ensuring a well-rounded education for our students.
                        With collaborative efforts from School Management, Students, Parents, and Teachers, we strive to unleash the inherent potential in every student, preparing them to become proud DPS Alumni and responsible global citizens.
                    </p>
                    <p class="font-arialBold font-bold text-xl">- Nirmal Kumar Paudel, Deerwalk Bharatpur School</p>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="flex flex-col pt-11 sm:pt-14 md:pt-16 lg:pt-16 xl:pt-24 gap-8 sm:gap-10 md:gap-12 lg:gap-16 xl:gap-16" id="Courses">
    <div class="flex justify-center">
        <h1 class="text-primary text-2xl font-arialBold font-bold md:text-4xl lg:4xl xl:text-4xl">Our Courses</h1>
    </div>
    <div class="flex flex-col gap-10 items-center md:flex lg:flex-row md:justify-center md:gap-14 lg:gap-24 xl:gap-28 2xl:gap-28 px-14">
        <div class="flex flex-row gap-10 md:gap-14 lg:gap-24 xl:gap-28 2xl:gap-28">
            <div class="">
                <div class="relative w-[8rem] h-[8rem] bg-primary rounded-lg sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                    <div class="absolute rounded-lg bottom-2 right-2 bg-sky-100 w-[8rem] h-[8rem] sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                        <div class="w-full h-full flex items-center justify-center">
                            <h1 class="text-primary font-arialBold font-bold text-center px-2 text-xl sm:text-2xl xl:px-4 2xl:text-2xl">
                                English Reading</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="relative w-[8rem] h-[8rem] bg-primary rounded-lg sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                    <div class="absolute rounded-lg bottom-2 right-2 bg-sky-100 w-[8rem] h-[8rem] sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                        <div class="w-full h-full flex items-center justify-center">
                            <h1 class="text-primary font-arialBold font-bold text-xl text-center px-3 sm:text-2xl xl:px-4 2xl:text-2xl">
                                Nepali Reading</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-10 md:gap-14 lg:gap-24 xl:gap-28 2xl:gap-28">
            <div class="">
                <div class="relative w-[8rem] h-[8rem] bg-primary rounded-lg sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                    <div class="absolute rounded-lg bottom-2 right-2 bg-sky-100 w-[8rem] h-[8rem] sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                        <div class="w-full h-full flex items-center justify-center">
                            <h1 class="text-primary font-arialBold font-bold text-xl text-center sm:text-2xl 2xl:text-2xl">
                                Sanskrit</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="relative w-[8rem] h-[8rem] bg-primary rounded-lg sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                    <div class="absolute rounded-lg bottom-2 right-2 bg-sky-100 w-[8rem] h-[8rem] sm:w-[16rem] sm:h-[16rem] lg:w-[10rem] lg:h-[10rem] xl:w-[11rem] xl:h-[11rem] 2xl:w-[12rem] 2xl:h-[12rem]">
                        <div class="w-full h-full flex items-center justify-center">
                            <h1 class="text-primary font-arialBold font-bold text-xl text-center sm:text-2xl 2xl:text-2xl">
                                Coding</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col gap-8 sm:gap-14 md:gap-16 lg:gap-16 xl:gap-16 2xl:gap-16 pt-11 sm:pt-14 md:pt-16 lg:pt-20 xl:pt-24 2xl:pt-28" id="Units">
    <div class="flex justify-center">
        <h1 class="text-primary font-arialBold font-bold text-2xl md:text-4xl lg:text-4xl 2xl:text-4xl">Our Units</h1>
    </div>
    <div class="flex flex-wrap justify-center items-center gap-7 sm:gap-10 lg:gap-16 xl:gap-20 2xl:gap-20 px-14">
        <!-- Unit 1 -->
        <div class="cursor-pointer">
            <div class="relative w-[8rem] h-[4rem] sm:w-[16rem] sm:h-[7rem] lg:w-[11rem] lg:h-[7rem] xl:w-[14rem] xl:h-[8rem] 2xl:w-[15rem] 2xl:h-[8rem] bg-primary rounded-lg">
                <div class="absolute bottom-2 right-2 bg-sky-100 w-full h-full rounded-lg flex items-center justify-center">
                    <a target="_blank" href="https://deerwalk.edu.np/sifalschool/">
                        <img src="{{asset('upload/deerwalk_sifal_school_logo.png')}}" class="w-24 sm:w-40 lg:w-36 xl:w-40 2xl:w-44">
                    </a>
                </div>
            </div>
        </div>
        <!-- Unit 2 -->
        <div class="cursor-pointer">
            <div class="relative w-[8rem] h-[4rem] sm:w-[16rem] sm:h-[7rem] lg:w-[11rem] lg:h-[7rem] xl:w-[14rem] xl:h-[8rem] 2xl:w-[15rem] 2xl:h-[8rem] bg-primary rounded-lg">
                <div class="absolute bottom-2 right-2 bg-sky-100 w-full h-full rounded-lg flex items-center justify-center">
                    <a target="_blank" href="https://deerwalk.edu.np/dhading-school">
                        <img src="{{asset('upload/deerwalk_dhading_school_logo.png')}}" class="w-24 sm:w-40 lg:w-36 xl:w-40 2xl:w-44">
                    </a>
                </div>
            </div>
        </div>
        <!-- Unit 3 -->
        <div class="cursor-pointer">
             <div class="relative w-[8rem] h-[4rem] sm:w-[16rem] sm:h-[7rem] lg:w-[11rem] lg:h-[7rem] xl:w-[14rem] xl:h-[8rem] 2xl:w-[15rem] 2xl:h-[8rem] bg-primary rounded-lg">
                <div class="absolute bottom-2 right-2 bg-sky-100 w-full h-full rounded-lg flex items-center justify-center">
                    <a target="_blank" href="https://dlc.dwit.edu.np/">
                        <img src="{{asset('upload/deerwalk_pokhara_school_logo.png')}}" class="w-24 sm:w-40 lg:w-36 xl:w-40 2xl:w-44">
                    </a>
                </div>
            </div>
            
        </div>
        <!-- Unit 4 -->
        <div class="cursor-pointer">
           <div class="relative w-[8rem] h-[4rem] sm:w-[16rem] sm:h-[7rem] lg:w-[11rem] lg:h-[7rem] xl:w-[14rem] xl:h-[8rem] 2xl:w-[15rem] 2xl:h-[8rem] bg-primary rounded-lg">
                <div class="absolute bottom-2 right-2 bg-sky-100 w-full h-full rounded-lg flex items-center justify-center">
                    <a target="_blank" href="https://deerwalk.edu.np/DWIT/">
                        <img src="{{asset('upload/dwit_logo.png')}}" class="w-24 sm:w-40 lg:w-36 xl:w-40 2xl:w-44">
                    </a>
                </div>
            </div>
        </div>
        <!-- Unit 5 -->
        <div class="cursor-pointer">
            <div class="relative w-[8rem] h-[4rem] sm:w-[16rem] sm:h-[7rem] lg:w-[11rem] lg:h-[7rem] xl:w-[14rem] xl:h-[8rem] 2xl:w-[15rem] 2xl:h-[8rem] bg-primary rounded-lg">
                <div class="absolute bottom-2 right-2 bg-sky-100 w-full h-full rounded-lg flex items-center justify-center">
                    <a target="_blank" href="https://deerwalktrainingcenter.com/">
                        <img src="{{asset('upload/dtc_logo.png')}}" class="w-24 sm:w-40 lg:w-36 xl:w-40 2xl:w-44">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class=" pt-11 md:pt-20 lg:pt-20 xl:pt-24 2xl:pt-28 flex justify-center items-center w-full md:px-16">
    <a target="_blank" href="https://dlc.dwit.edu.np/"><img src="{{asset('upload/DLC_banner.png')}}" class="object-cover w-full md:rounded-3xl"></a>
</div> -->

<!-- <div class="pt-11 2xl:pt-14 flex justify-center min-w-screen">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28255.09784256106!2d85.14281347910158!3d27.72076789999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb25dc8f452eaf%3A0xc5ff2d33084a4703!2sDeerwalk%20Bharatpur%20School!5e0!3m2!1sen!2snp!4v1713259209944!5m2!1sen!2snp" width="2720" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
<br>
<br>
<div class="bg-primary py-10" id="Footer">
    <div class="container mx-auto px-6 sm:px-10 md:px-14 lg:px-20 xl:px-24 2xl:px-28">
        <div class="flex flex-col lg:gap-14 xl:gap-14 2xl:gap-14">
            <div class="flex flex-col lg:flex-row justify-around items-start lg:items-center">
                <div class="flex flex-col md:gap-3 lg:gap-4 xl:gap-6 2xl:gap-6 mb-6 lg:mb-0">
                    <a href="#whyDPS" class="hover:text-gray-900">
                        <p class="font-arialRegular font-semibold text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Why Deerwalk Bharatpur School?</p>
                    </a>
                    <a href="#Units" class="hover:text-gray-900">
                        <p class="font-arialRegular font-semibold text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Our Units</p>
                    </a>
                    <a href="#Management" class="hover:text-gray-900">
                        <p class="font-arialRegular font-semibold text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Management</p>
                    </a>
                </div>
                <div class="flex flex-col md:gap-3 lg:gap-4 xl:gap-6 2xl:gap-6 mb-6 lg:mb-0">
                    <a href="#Courses" class="hover:text-gray-900">
                        <p class="font-arialRegular font-semibold text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Courses</p>
                    </a>
                    <a href="#Academics" class="hover:text-gray-900">
                        <p class="font-arialRegular font-semibold text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Academics</p>
                    </a>
                    <a href="#Admission" class="hover:text-gray-900">
                        <p class="font-arialRegular font-semibold text-xs lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Admission</p>
                    </a>
                </div>
                <div class="flex flex-col md:gap-3 lg:gap-4 xl:gap-6 2xl:gap-6 mb-6 lg:mb-0">
                    <p class="font-arialRegular font-normal text-sm lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">Bharatpur-12, Chitwan</p>
                    <p class="font-arialRegular font-normal text-sm lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">056-420127</p>
                    <p class="font-arialRegular font-normal text-sm lg:text-sm xl:text-sm 2xl:text-lg text-white text-left">contact@bharatpur.deerwalk.edu.np</p>
            </div>
        </div>
        <div class="flex flex-col gap-4 md:flex-row md:justify-around items-center">
            <div class="flex items-center justify-center mb-4 md:mb-0">
                <img src="{{asset('logo/white.png')}}" alt="DPS Logo" class="object-fit w-[10rem] md:w-[12rem] lg:w-[12rem] xl:w-[12rem] 2xl:w-52">
            </div>
            <div class="flex flex-row items-center gap-2">
                <p class="text-white text-lg">©</p>
                <div class="flex flex-col">
                    <p class="font-arialRegular text-xs md:text-xs lg:text-xs xl:text-xs 2xl:text-xs text-white">
                        <span id="currentYear">2025</span> Deerwalk Bharatpur School.<br>All Rights Reserved.
                    </p>
                </div>
            </div>
            <div class="flex justify-center gap-3 lg:gap-6 text-white">
                <a target="_blank" href="https://www.instagram.com/deerwalk_Bharatpur_school/">
                <img src="{{asset('icon/instagram.png')}}" alt="Instagram" class="w-5 lg:w-7 xl:w-7 2xl:w-8">
            </a>
                <a target="_blank" href="https://www.facebook.com/profile.php?id=61575052940467">
                <img src="{{asset('icon/facebook.png')}}" alt="Facebook" class="w-5 lg:w-7 xl:w-7 2xl:w-8">
                </a>
                <a target="_blank" href="https://x.com/deerwalkBharatpur">
                <img src="{{asset('icon/twitter.png')}}" alt="Twitter" class="w-5 lg:w-7 xl:w-7 2xl:w-8">
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/deerwalk-Bharatpur-school/">
                <img src="{{asset('icon/linkedin.png')}}" alt="LinkedIn" class="w-5 lg:w-7 xl:w-7 2xl:w-8">
                </a>
                <a target="_blank" href="https://www.threads.net/@deerwalk_Bharatpur_school">
                <img src="{{asset('icon/threads.png')}}" alt="Threads" class="w-5 lg:w-7 xl:w-7 2xl:w-8">
                </a>
            </div>
        </div>
    </div>
</div>
</body>

</html>