<?php 
    $page = "Home";
    include("includes/head.php");
    include("includes/header.php");
?>

<main>
    <div class="hero" id="hero-index">
        <div class="hero-content">
            <a href="seminars.php">Learn More</a>
        </div>
    </div>

    <div id="introduction">
        <div id="introduction-text">
            <h1>Our Classes</h1>
            <p>We offer many courses that allow you to build a better relationship with your dog. These classes will not only train your pet to understand you but will help you understand them too.</p>
        </div>
        
        <div id="barn-logo"></div>
    </div>

    

    <div id="class-list">
        <a href="puppyclass.php" id="puppy-class-overview" class="class-overview">
            <div id="puppy-class-overview-image" class="class-overview-image"></div>
            <div class="class-overview-text">
                <h3>Puppy</h3>
                <p>Will address:</p>
                <ul>
                    <li>Social engagement</li>
                    <li>Specific needs</li>
                    <li>Basic cues</li>
                    <li>Unwanted behavior</li>
                    <li>Right vs Wrong</li>
                    <li>Rewards</li>
                </ul>
            </div>
        </a>
        <a href="obedienceclass.php" id="obedience-class-overview" class="class-overview">
            <div id="obedience-class-overview-image" class="class-overview-image"></div>
            <div class="class-overview-text">
                <h3>Obedience</h3>
                <p>Will teach you about:</p>
                <ul>
                    <li>Good behavior</li>
                    <li>Loose leash walk</li>
                    <li>Basic commands</li>
                    <li>Socialization</li>
                    <li>Typical problems</li>
                    <li>Self control</li>
                </ul>
            </div>
        </a>
        <a href="rallyclass.php" id="rally-class-overview" class="class-overview">
            <div id="rally-class-overview-image" class="class-overview-image"></div>
            <div class="class-overview-text">
                <h3>Rally</h3>
                <p>Will educate you on:</p>
                <ul>
                    <li>Games and activities</li>
                    <li>Rewarding for behavior</li>
                    <li>Improving communication</li>
                    <li>More basic cues</li>
                </ul>
            </div>
        </a>
        <a href="scentworkclass.php" id="scentwork-class-overview" class="class-overview">
            <div id="scentwork-class-overview-image" class="class-overview-image"></div>
            <div class="class-overview-text">
                <h3>Scent Work</h3>
                <p>Will help your dog improve:</p>
                <ul>
                    <li>Snout work</li>
                    <li>Tracking</li>
                    <li>Confidence</li>
                    <li>Natural talents</li>
                    <li>Rewarding itself</li>
                </ul>
            </div>
        </a>
    </div>

    <div id="training-reasons">
        <div id="reasons-image"></div>
        <div id="reasons-text">
            <h3>Why do you need to train your dog?</h3>
            <p>Being engaged with us, people understand how great it is to have a well-bred, properly trained and happy dog.</p>
            <h4>First</h4>
            <p>Often, the owners simply do not understand what their dog wants. In such cases, the dog is looking for entertainment himself, making people nervous, worried, angry or just blush.</p>
            <h4>Second</h4>
            <p>Both owner and the dog lose a huge amount of entertainment and games not spending time with each other. Our four-legged friends need a connection with people, they have been serving us for millennia, bringing great benefits, positive and boundless love. We can only learn to understand them correctly and be friends and partners.</p>
            <h4>Third</h4>
            <p>An unlearned dog is dangerous, regardless of the breed. In this case, the dog is dangerous to others and to itself. How many problems such a dog can create: run out onto the road, creating an emergency or scare the child. An untrained dog can pick up poison on the street or bite someone's foot. The owner can establish contact with his dog, provide great training, ultimately it can help to control hard situations that might appear.</p>
            <br/>
            <h4>Initial training</h4> 
            <p>It includes questions for beginners: caring for a puppy, raising and socializing, how to motivate a dog and get its attention, how to adapt it to living conditions, how to set rules for a dog and for itself, and much more - a concentrate of knowledge for a novice dog breeder.</p>
            <h4>General training course</h4> 
            <p>You will learn how to attract the attention of a dog, how to show him that the execution of commands is not an obligation, but an interesting game. That obedience is, first of all, beneficial for the dog! You will also get acquainted with the teams on how to properly teach, use and develop them.</p>
        </div>
    </div>

    <div id="upcoming-seminars">
        <h2>Upcoming Seminars</h2>
        <a href="seminars.php#seminar-1" id="seminar-1" class="seminar">
            <div id="seminar-1-background" class="seminar-background">
                <h3>Guest Kanine Trainer</h3>
            </div>
            <div class="seminar-bar">
                <p class="date">Wednesday 15th</p>
                <p class="time">9-10am</p>
            </div>
        </a>
        <a href="seminars.php#seminar-2" id="seminar-2" class="seminar">
            <div id="seminar-2-background" class="seminar-background">
                <h3>Training Introduction</h3>
            </div>
            <div class="seminar-bar">
                <p class="date">Wednesday 15th</p>
                <p class="time">9-10am</p>
            </div>
        </a>
        <a href="seminars.php#seminar-3" id="seminar-3" class="seminar">
            <div id="seminar-3-background" class="seminar-background">
                <h3>Scent Work Info</h3>
            </div>
            <div class="seminar-bar">
                <p class="date">Wednesday 15th</p>
                <p class="time">9-10am</p>
            </div>
        </a>
    </div>

</main>

<?php include("includes/footer.php");?>