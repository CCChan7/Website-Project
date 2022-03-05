<!doctype html>
 <html lang="en"> <!-- shows that language of page is in english -->
<header>
    <meta charset="UTF-8"> <!-- uses unicode -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- allows page to be changed in size but starts at 1 -->
    <h1><u>Chan Bookstore</u></h1>
    <br></br>
    <link href="_css/main.css" rel="stylesheet"> <!-- links to css file -->
</header>

<nav ul class= "navbar">
	<li><a href= "index.php"> Home </a></li> <!--links back to index.php-->
	<li><a href= "#"> About us </a></li> <!-- does not link anywhere -->
	<li><a href= "#"> Contact us </a></li> 
    </ul>
</nav>


<body>
	<br></br>	
	<h4>Welcome to the bookshop website!</h4>	
    <h4>Click the "buy" button on any book!</h4>
    <br></br>
    <h3>Macbeth by William Shakespeare</h3>
    <article class = "main" style="line-height: 30px"> <!-- defines the section where the writing is and defines the space inbetween each line -->
    <p class = "image" style="float: left;"><img src="_images/macbeth.jpg" alt = "Macbeth book cover" height= "280px" width= "200px"></p> <!-- shows book cover -->
    <p>The play concerns a trusted general who secretly lusts for power. Encouraged by the prophecies of three witches and urged on by his ambitious wife Macbeth commits regicide. Left fearful and superstitious by this desperate act he is driven to a spiralling course of murder and outrage, almost inevitably culminating in his own death. One of Shakespeare’s most popular tragedies, Macbeth is ostensibly based on the Scottish king although the story represented in the play bears no relation to historical fact as the true King Macbeth was well respected by his contemporaries. This book includes the hero Macbeth becoming more and more evil after he gets told his destiny by the witches and becomes greedy with power. </p>
    <br></br>
    <form action = "pay.php"> <!-- links to buy.php when pressed -->
    <input type='submit' value='BUY' id='buybtn' style= "height: 50px; width: 75px">
    </form>
    <br></br>
    </article>

    <h3>1984 by George Orwell</h3>
    <article class = "main" style="line-height: 30px">
    <p class = "image" style="float: left;"><img src="_images/1984.jpg" alt = "1984 book cover" height= "280px" width= "200px"></p>
    <p>Winston Smith lives in a society where the government controls people every second of the day. He fights this world with love. But it's dangerous: love for another person can be punished by death - and Big Brother is always watching. Orwell's classic story shows that there is no freedom unless ideas and beliefs can be questioned. This is as true today as when it was written, more than fifty years ago.</p>
    <br></br>
    <br></br>
    <form action = "pay.php">
    <input type='submit' value='BUY' id='buybtn' style= "height: 50px; width: 75px">
    </form>
    <br></br>
    </article>

    <h3>Lord of the flies by William Golding</h3>
    <article class = "main" style="line-height:30px">
    <p class = "image" style="float: left;"><img src="_images/lordoftheflies.jpg" alt = "Lord of the flies book cover" height= "280px"  width= "200px"></p>
    <p>Lord of the Flies is a 1954 novel by Nobel Prize–winning British author William Golding. The book focuses on a group of British boys stranded on an uninhabited island and their disastrous attempt to govern themselves. Themes include the tension between groupthink and individuality, between rational and emotional reactions, and between morality and immorality.</p>
    <br></br>
    <form action = "pay.php">
    <input type='submit' value='BUY' id='buybtn' style= "height: 50px; width: 75px">
    </form>
    <br></br>
    </article>
    
    <h3>Alice's Adventures in Wonderland by Charles Lutwidge Dodgson</h3>
    <article class = "main" style="line-height:30px">
    <p class = "image" style="float: left;"><img src="_images/aliceinwonderland.jpg" alt = "Alice in wonderland book cover"height= "280px"  width= "200px"></p>
    <p>One of the most popular and most quoted books in English, Alice's Adventures in Wonderland was the creation of Charles Lutwidge Dodgson (1832–1898), a distinguished scholar, mathematician and author who wrote under the pseudonym of Lewis Carroll. Written for young readers but enjoyed equally by adults, the fantastic tale transformed children's literature, liberating it from didactic constraints. The story is deeply but gently satiric, enlivened with an imaginative plot and brilliant use of nonsense, it relates Alice's adventures in a bizarre land underground. There she encounters a cast of strange characters and fanciful beasts, including the White Rabbit, March Hare, and Mad Hatter, the sleepy Dormouse and grinning Cheshire Cat,the Mock Turtle, the dreadful Queen of Hearts, and unusual creatures.</p>
	<br></br>
    <form action = "pay.php">
    <input type='submit' value='BUY' id='buybtn' style= "height: 50px; width: 75px">
    </form>
    <br></br>
    </article>
    <footer>
    <h4> Thank you for using the website! </h4> <!-- shows at bottom of screen as footer -->
    </footer>
</body>

<script src="_scripts/javascript.js"> </script> <!--links to javascript-->

</html>