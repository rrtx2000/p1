<!DOCTYPE html>
<html>
    <head>
        <title>Alan Martinson</title>
        <link rel='stylesheet' type='text/css' href='css/main.css' />
    </head>
    <body>
        <?php
            $quotes = array("That's here. That's home. That's us. On it, everyone you ever heard of, every human being who ever lived, lived out their lives.
                            The aggregate of all our joys and sufferings, thousands of confident religions, ideologies and economic doctrines, every hunter
                            and forager, every hero and coward, every creator and destroyer of civilizations, every king and peasant, every young couple in love,
                            every hopeful child, every mother and father, every inventor and explorer, every teacher of morals, every corrupt politician,
                            every superstar, every supreme leader, every saint and sinner in the history of our species, lived there - on a mote of dust,
                            suspended in a sunbeam.
                            <br/>
                            <br/>
                            The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors
                            so that in glory and in triumph they could become the momentary masters of a fraction of a dot. Think of the endless cruelties
                            visited by the inhabitants of one corner of the dot on scarcely distinguishable inhabitants of some other corner of the dot.
                            How frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds. Our posturings, our
                            imagined self-importance, the delusion that we have some privileged position in the universe, are challenged by this point of pale light.
                            <br/>
                            <br/>
                            To my mind, there is perhaps no better demonstration of the folly of human conceits than this distant image of our tiny world.
                            To me, it underscores our responsibility to deal more kindly and compassionately with one another and to preserve and cherish that
                            pale blue dot, the only home we've ever known.
                            - Carl Sagan",
                            "Short and sweet and hard to beat. - Mr. Feaster, my 5th grade teacher critiquing my poem",
                            "Some are born great, some achieve greatness, and some have greatness thrust upon them. - William Shakespeare",
                            "To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment. - Ralph Waldo Emerson");
            
            $numberOfQuotes = count($quotes);
        ?>
        <div>
            
            <h1 class='mycenter'>Alan Martinson - P1 For CSCI E15</h1>
            
            <img src='images/alan.png' alt='Floor 91 of Taipei 101' title='Floor 91 of Taipei 101' height='250'>
            
            <h2>About Me</h2>
            <p>
               I'm working full time as a software engineer for Austin Community College and I have a Bachelors degree in electronics.
               When I got my job as a software engineer most of my programming was self taught.
               I'm here to learn how to be a better programmer and work towards getting my Masters in software engineering.
               I'm also the proud papa of my 2 year old daughter.
            </p>
            
            <h2>Random Quote</h2>
            <blockquote>
                <?php
                    $whichQuote = rand(0,$numberOfQuotes - 1);       //this will select one of the quotes at random, starting at 0 since arrays are 0 based
                   
                    echo("The number of random quotes is: " . $numberOfQuotes . "
                         <br/><br/>
                         " . $quotes[$whichQuote]);
                                
                ?>
            </blockquote>
            <p id='thatsall'>Ble ble ble, that's all folks - Porky Pig</p>
        </div>
    </body>
</html>