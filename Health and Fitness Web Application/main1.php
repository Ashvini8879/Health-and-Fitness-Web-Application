

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health & Fitness</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    

</head>

<body>
    <header class="header">
        <img src="images/ash.png" style="width: 80px;">
        <a href="#" class="logo"><span>HEALTH & </span>FITNESS</a>
        <div id="menu-btn" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about </a>
            <a href="#features">features</a>
           
            <a href="DHIRAJ/dhiraj.php">store</a>
            <a href="membership.html">View Plan</a>
            <a href="index.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
            
        </nav>
    </header>

    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(C:\Users\Dell\Desktop\webdev\project11\home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <br><br>
                        <!-- <span>Unleash the Beast Within</span> -->
                        <h3>No excuse is stronger than you are.</h3>
                        <a href="#features" class="btn">get started</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<br><br><br><br><br><br><br><br>
 <!--------[ABOUT SECTION]---------------------------------------------------------------------------------------------------------->


    <section class="about" id="about">
        <div class="image">
            <img src="images/work hard.jpg" alt="">
        </div>
        <div class="content">
            <span>about us</span>
            <h3 class="title">Lift heavy, work hard, and aim to be the best.</h3>
            <p></p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>Personalized Training</h3>
                    <p>Creating convenient, customized, and creative workouts for each individual client.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Diet Advice</h3>
                    <p>Providing diet advice and healthy eating tips</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Support/Motivation</h3>
                    <p>Helping you smash your goals to ensure satisfaction and build motivation while providing moral support.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Workouts</h3>
                    <p>Ensuring that workouts are always fun and challenging.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="chat-container">
        <div class="chat-box" id="chat-box"></div>
        <div class="clearfix"></div>
        <input type="text" id="user-input" placeholder="Type a message...">
        <button id="send-button" onclick="sendMessage()">Send</button>
    </div>

<br>
<br>
<br><br><br><br><br><br>

   
  

    <!--------[FEATURES SECTION]---------------------------------------------------------------------------------------------------------->


    <section class="features" id="features">

        <h1 class="heading"> <span>TOOLS</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/timer.jpg" alt="">
                </div>
                <div class="content">
                    <img src="images/icon-1.png" alt="">
                    <h3>Watch Timer</h3>
                    <p></p>
                    <a href="timer/timer.html" class="btn">read more</a>
                </div>
            </div>

            <div class="box second">
                <div class="image">
                    <img src="images/aqua.png" alt="">
                </div>
                <div class="content">
                    <img src="" alt="">
                    <h3>Water Tracker</h3>
                    <p></p>
                    <a href="water/watertracker.html" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/calculator.png" alt="">
                </div>
                <div class="content">
                    <img src="images/icon-3.png" alt="">
                    <h3>BMI Calculator</h3>
                    <p></p>
                    <a href="BMICal/bmi.html" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>


    <!--------[PRICING SECTION]---------------------------------------------------------------------------------------------------------->

<section class="pricing" id="pricing">

<div class="information">
    <span>Membership plan</span>
    <h3>View your purchased plan</h3>
    <p></p>
    <p> <i class="fas fa-check"></i> cardio exercise </p>
    <p> <i class="fas fa-check"></i> weight lifting </p>
    <p> <i class="fas fa-check"></i> diet plans </p>
</div>

<div class="plan basic">
    <h3>Exercises</h3>
    <img src="fitness.png" style="height:80px;">
    <div class="list">
        
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> stretching </p>
    </div>
    <a href="subscription/exe/index1.html" class="btn">get started</a>
</div>

<div class="plan">
    <h3>Meditation & Yoga</h3>
    <img src="yoga.jpg" style="height:80px;">
    <div class="list">
       
        <p> <i class="fas fa-check"></i> Yoga Asanas </p>
        <p> <i class="fas fa-check"></i> Meditation session </p>
        <p> <i class="fas fa-check"></i>Sleep Stories </p>
    </div>
    <a href="subscription/mind/index.html" class="btn">get started</a>
</div>

</section>



    <section class="trainers" id="trainers">

        <h1 class="heading"> <span>Merchandise</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="dhiraj/accessories/Screenshot 2024-02-26 144713.png" alt="">
                <div class="content">
                    <span>order</span>
                    <a href="dhiraj/Accessories.php"><h3>protein bottles</h3></a>
                    <div class="share">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="dhiraj/health/Screenshot 2024-02-16 161151.png" alt="">
                <div class="content">
                    <span>order</span>
                    <a href="dhiraj/health.php"><h3>health supplements</h3></a>
                    <div class="share">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="dhiraj/women/Screenshot 2024-02-26 134242.png" alt="">
                <div class="content">
                    <span>order</span>
                    <a href="dhiraj/women.php"><h3>Gym Apparel</h3></a>
                    <div class="share">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
            </div>

        </div>

    </section>


  <!--  ------[BANNER SECTION]-------------------------------------------------------------------------------------------------------->

    <section class="banner">
        <span>join us now</span>
        <h3>Explore Our Workout Video Library</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
        <a href="membership.html" class="btn">lets go</a>
    </section>


   <!-- ------[REVIEW SECTION]---------------------------------------------------------------------------------------------------------->


    <section class="review">

        <div class="information">
            <span>testimonials</span>
            <h3>what my clients say</h3>
            <p>Here is some feedback that I've received from my clients.</p>
            
        </div>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>I've seen amazing progress and the Radiont training community is very supportive.</p>
                    <div class="user">
                        <img src="images/pic-1.png" alt="">
                        <div class="info">
                            <h3>Client 1</h3>
                           <span>Nutritionist</span> 
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>I enjoyed all of the workouts and the payment plans were very helpful.</p>
                    <div class="user">
                        <img src="images/pic-2.jpg" alt="">
                        <div class="info">
                            <h3>Client 2</h3>
                             <span>Athlete</span> 
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>I really loved the merchandise offered.</p>
                    <div class="user">
                        <img src="images/pic-3.jpg" alt="">
                        <div class="info">
                            <h3>Client 3</h3>
                             <span>Yoga Instructor</span>
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Really fun training sessions.</p>
                    <div class="user">
                        <img src="images/pic-4.jpg" alt="">
                        <div class="info">
                            <h3>Client 4</h3>
                            <span>Dance Instructor</span> 
                        </div>
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

   



    <!--------[FOOTER SECTION]---------------------------------------------------------------------------------------------------------->


     <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a class="links" href="#home">home</a>
                <a class="links" href="#about">about</a>
                <a class="links" href="#features">features</a>
                <a class="links" href="#pricing">training plans</a>
                <a class="links" href="#trainers">merchandise</a>
            </div>

           

            <div class="box">
    <h3>Contact Information</h3>
    <p><i class="fas fa-phone"></i> +1(868)-123-4567</p>
    <p><i class="fas fa-envelope"></i>contact@gymfitness.com</p>
    <p><i class="fas fa-map"></i> India</p>
    <p><i class="fas fa-download"></i> Download Our App</p>
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>
    
  
   </div>



 
   <div class="box">
                <h3>Maps</h3>
                <p> <i class="fas fa-map-marker map-marker"></i> Find the gym</p>
        <div>
        <a href="find.html"><img src="images/map.jpg"></a> 
       </div>

         </div> 
</div>

    </section>
   
    <div class="credit"> created by <span>Ashvini Davale</span> | 2024</div>
   
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    // Initialize Swiper
    var swiper = new Swiper('.review-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000, // 5 seconds delay between slides
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

<script>
        const chatBox = document.getElementById('chat-box');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');

        const questions = [
    "Hi",
    "What's your name?",
    "How old are you?",
    "Where are you from?",
    "What are your hobbies?",
    "What is the best exercise for weight loss?",
    "How can I improve my flexibility?",
    "What should I eat before a workout?",
    "Can you recommend a good yoga routine?",
    "How do I build muscle?",
    "What's the difference between cardio and strength training?",
    "How can I stay motivated to exercise regularly?",
    "What are some healthy snack options?",
    "How do I create a workout plan?",
    "What's the importance of warming up before exercising?",
    "Can you suggest some effective core exercises?",
    "How much water should I drink in a day?",
    "What are the benefits of meditation?",
    "Is it better to work out in the morning or evening?",
    "How do I prevent injuries during exercise?",
    "What are some beginner-friendly workouts?",
    "Can you recommend a good running routine?",
    "How can I improve my posture?",
    "What are superfoods and how do they benefit health?",
    "What are some good warm-up exercises before a workout?",
    "How often should I change my workout routine?",
    "What are the benefits of high-intensity interval training (HIIT)?",
    "Can I do strength training every day?",
    "What are the best exercises for building leg muscles?",
    "Is it better to do full-body workouts or split workouts?",
    "What are the advantages of using resistance bands for exercise?",
    "How can I prevent muscle soreness after a workout?",
    "What's the best way to measure progress in fitness?",
    "Should I eat before or after a workout?",
    "What are the benefits of stretching after exercise?",
    "Can I do cardio and strength training on the same day?",
    "What should I do if I hit a fitness plateau?",
    "How can I increase my running speed?",
    "What are some effective bodyweight exercises?",
    "Is it okay to workout on an empty stomach?",
    "What's the difference between static and dynamic stretching?",
    "How can I improve my cardiovascular endurance?",
    "What are the benefits of swimming for fitness?",
    "Should I do cardio before or after weights?",
    "What are the advantages of using a fitness tracker?",
    "How do I know if I'm lifting too much weight?",
    "What's the best way to recover after a tough workout?",
    "Can yoga help with flexibility?",
    "What are some good post-workout meal options?",
    "Is it better to do more reps or more sets?",
    "What's the importance of rest days in a workout routine?",
    "How can I tone my arms without weights?",
    "What are the benefits of cycling for fitness?",
    "Should I drink protein shakes for muscle gain?",
    "What are some good exercises for strengthening the core?",
    "Is it okay to skip stretching before a workout?",
    "What are the advantages of circuit training?",
    "How can I avoid getting bored with my workout routine?",
    "What's the best way to improve flexibility in the hamstrings?",
    "Can I do ab exercises every day?",
    "What are the benefits of Pilates?",
    "Should I do cardio if my goal is to build muscle?",
    "What are some good foods to eat before a workout?",
    "Is it better to workout at home or at the gym?",
    "How can I improve my balance?",
    "What's the difference between bulking and cutting?",
    "What are the advantages of using kettlebells?",
    "How do I know if I'm overtraining?",
    "What are some good exercises for the glutes?",
    "Is it okay to workout when I'm feeling sore?",
    "What are the benefits of strength training for women?",
    "Should I do cardio if I'm trying to lose weight?",
    "What are some good exercises for the back muscles?",
    "How can I incorporate more protein into my diet?",
    "Is it better to do cardio indoors or outdoors?",
    "What Is Difference Between Fitness And Health?"
];

const replies = [
    "Hello! How can I assist you today?",
    "My name is Chatbot.",
    "I'm just a program, age doesn't apply to me!",
    "I exist in the digital realm.",
    "I enjoy chatting with people like you!",
    "The best exercise for weight loss depends on various factors. Cardio exercises like running, cycling, or swimming are great choices.",
    "Improving flexibility can be achieved through regular stretching exercises such as yoga or Pilates.",
    "A balanced meal with carbs and protein is ideal. Examples include whole grain toast with peanut butter or a banana.",
    "For a good yoga routine, try a mix of poses including Downward Dog, Warrior I and II, and Child's Pose.",
    "Building muscle requires strength training exercises like weight lifting or bodyweight exercises such as push-ups and squats.",
    "Cardio exercises focus on increasing heart rate and endurance, while strength training targets muscle strength and mass.",
    "Staying motivated can be easier with a workout buddy, setting achievable goals, and mixing up your routine to keep it interesting.",
    "Healthy snack options include fruits, nuts, yogurt, or whole grain crackers with hummus.",
    "Creating a workout plan involves setting specific goals, choosing exercises for different muscle groups, and scheduling rest days.",
    "Warming up helps prepare your muscles and joints for exercise, reducing the risk of injury. Try light jogging or dynamic stretches.",
    "Effective core exercises include planks, crunches, Russian twists, and leg raises.",
    "The general recommendation is to drink about 8 cups (64 ounces) of water per day, but it varies based on individual factors.",
    "Meditation offers benefits such as reducing stress, improving focus, and promoting emotional well-being.",
    "The best time to work out depends on personal preference and schedule. Both morning and evening workouts have benefits.",
    "To prevent injuries, it's important to use proper form, warm up, cool down, and listen to your body's signals.",
    "Beginner-friendly workouts can include walking, cycling, swimming, or beginner-level workout videos.",
    "For a running routine, start with a mix of walking and running intervals, gradually increasing running time.",
    "Improving posture involves exercises to strengthen core muscles, stretching tight muscles, and being mindful of posture throughout the day.",
    "Superfoods are nutrient-dense foods rich in vitamins, minerals, and antioxidants. Examples include berries, nuts, and leafy greens.",
    "Good warm-up exercises include jogging in place, arm circles, leg swings, and jumping jacks.",
    "It's recommended to change your workout routine every 4-6 weeks to prevent plateaus and keep challenging your body.",
    "HIIT offers benefits such as increased calorie burn, improved cardiovascular fitness, and time efficiency.",
    "It's generally not recommended to do strength training for the same muscle groups every day. Muscles need time to recover and grow.",
    "Exercises like squats, lunges, deadlifts, and leg presses are excellent for building leg muscles.",
    "Whether to do full-body or split workouts depends on your goals. Full-body is efficient; splits allow more focus per muscle group.",
    "Resistance bands offer portability, variable resistance, versatility, and help with muscle activation and joint stabilization.",
    "To prevent muscle soreness, make sure to cool down, stretch, stay hydrated, and consider using foam rolling or massage.",
    "You can measure progress with metrics like weight lifted, body measurements, endurance levels, speed, and overall energy levels.",
    "Eating a balanced meal with carbs and protein about 1-2 hours before exercise can provide energy and aid in recovery.",
    "Stretching after exercise helps with flexibility, reduces muscle tension, improves circulation, and may prevent injury.",
    "Yes, you can do cardio and strength training on the same day, but consider splitting them into different sessions if possible.",
    "To overcome a fitness plateau, try changing your routine, increasing intensity, adding new exercises, or focusing on nutrition.",
    "Improving running speed involves interval training, sprints, hill workouts, plyometrics, and proper running form.",
    "Bodyweight exercises like push-ups, squats, lunges, planks, burpees, and mountain climbers can be very effective.",
    "Working out on an empty stomach is generally okay for light to moderate exercise, but consider a light snack for more intensity.",
    "Static stretching involves holding a position to stretch a muscle, while dynamic stretching involves moving the muscle through its range of motion.",
    "Cardiovascular endurance improves with activities like running, cycling, swimming, HIIT, and consistent aerobic exercise.",
    "Swimming offers benefits such as full-body workout, low-impact exercise, improved cardiovascular health, and increased muscle tone.",
    "The order depends on your goals. Cardio before weights can warm up muscles; weights before cardio may preserve energy for strength training.",
    "Fitness trackers help monitor heart rate, calories burned, steps taken, sleep patterns, and can provide motivation for daily activity.",
    "If you're unable to complete a full set with proper form, the weight might be too heavy. Start with a weight you can lift with proper form.",
    "Recovery after a tough workout involves proper nutrition, hydration, rest, sleep, and perhaps gentle stretching or light activity.",
    "Yoga can significantly improve flexibility through poses like Downward Dog, Warrior poses, Seated Forward Bend, and Cobra pose.",
    "Post-workout meals should include protein and carbs for muscle recovery. Examples: chicken and sweet potato, Greek yogurt with fruit, or a protein shake.",
    "Both rep and set count matter for different goals. More reps with lighter weights for endurance; fewer reps with heavier weights for strength.",
    "Rest days are crucial for muscle recovery, injury prevention, and overall performance improvement. Listen to your body's need for rest.",
    "Toning arms without weights can be done with exercises like push-ups, tricep dips, chair dips, arm circles, and plank shoulder taps.",
    "Cycling is excellent for cardiovascular health, leg muscle strengthening, calorie burning, and can be a low-impact form of exercise.",
    "Protein shakes can be beneficial for muscle gain, especially if you struggle to meet protein needs through whole foods alone.",
    "Core exercises like planks, crunches, Russian twists, bicycle crunches, and leg raises are great for strengthening the core muscles.",
    "Skipping stretching before a workout can increase the risk of injury. Dynamic stretching is ideal before workouts to warm up muscles.",
    "Circuit training combines cardio and strength exercises in quick succession, offering a time-efficient full-body workout with added calorie burn.",
    "To avoid workout boredom , try new activities, change workout locations, join fitness classes, set new goals, or find a workout buddy.",
    "Improving hamstring flexibility involves stretches like seated forward bend, standing hamstring stretch, lunges, and yoga's standing forward fold.",
    "Ab exercises can be done daily, but it's also important to give the muscles time to rest and recover for optimal growth.",
    "Pilates offers benefits such as improved core strength, flexibility, posture, muscle tone, and mind-body connection.",
    "Doing cardio alongside muscle-building workouts can aid in overall fitness, heart health, and calorie burning.",
    "Good pre-workout foods include bananas, whole grain toast, Greek yogurt, oatmeal, or a smoothie with fruits and protein.",
    "The choice between working out at home or the gym depends on personal preference, access to equipment, motivation, and convenience.",
    "Balance can be improved with exercises like single-leg stands, yoga poses, stability ball exercises, and Tai Chi.",
    "Bulking involves consuming excess calories and lifting heavy weights to build muscle, while cutting involves reducing calories to lose fat while preserving muscle.",
    "Kettlebells offer advantages such as total body conditioning, functional strength, improved grip strength, and calorie burning.",
    "Signs of overtraining include persistent fatigue, decreased performance, mood changes, disturbed sleep, and increased risk of injury.",
    "Glute exercises like squats, lunges, deadlifts, hip thrusts, bridges, and leg presses can help strengthen and tone the glute muscles.",
    "Working out when feeling sore is okay, but avoid targeting the same muscle groups. Focus on light exercise, stretching, or a different muscle group.",
    "Strength training benefits for women include increased metabolism, bone density, muscle tone, functional strength, and injury prevention.",
    "Cardio can aid in weight loss by burning calories and improving cardiovascular health. It's a valuable addition to a weight loss plan.",
    "Back exercises like rows, lat pulldowns, deadlifts, Superman holds, and reverse flyes target the back muscles effectively.",
    "Protein-rich foods like chicken, fish, eggs, tofu, lentils, beans, nuts, and Greek yogurt are great options to increase protein intake.",
    "Both indoor and outdoor cardio have benefits. Indoor offers controlled environment, while outdoor provides fresh air, scenery, and varying terrain.",
"Fitness refers to the physical ability to perform tasks, while health encompasses a broader state of physical, mental, and social well-being."
];

        function sendMessage() {
            const userMessage = userInput.value.trim();
            if (userMessage === '') return;

            displayMessage(userMessage, 'user');
            processMessage(userMessage);

            userInput.value = '';
        }

        function displayMessage(message, sender) {
            const messageElement = document.createElement('p');
            messageElement.textContent = `${sender}: ${message}`;
            chatBox.appendChild(messageElement);

            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function processMessage(message) {
            let reply = "I'm sorry, I didn't understand that.";

            for (let i = 0; i < questions.length; i++) {
                if (message.toLowerCase().includes(questions[i].toLowerCase())) {
                    reply = replies[i];
                    break;
                }
            }

            displayMessage(reply, 'chatbot');
        }

        // Initial greeting
        displayMessage("Hello! How can I assist you today?", 'chatbot');

        // Send message when Enter key is pressed
        userInput.addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>

</html>


