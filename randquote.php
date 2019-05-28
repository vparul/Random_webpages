<?php
$quotes=[
[
'author'=>' try to create sympathy for my characters, then turn the monsters loose.',
'text'=> 'Stephen King'
],
[
'author'=>' Prose is architecture, not interior decoration.',
'text'=>'Ernest Hemingway'
],
[
'author'=>' It’s none of their business that you have to learn to write. Let them think you were born that way.',
'text'=> 'Ernest Hemingway'
],
[
'author'=>' Most writers regard the truth as their most valuable possession, and therefore are most economical in its use.',
'text'=> 'Mark Twain'
],
[
'author'=>' To produce a mighty book, you must choose a mighty theme.',
'text'=> 'Herman Melville'
],
['author'=>'It is perfectly okay to write garbage—as long as you edit brilliantly..',
'text'=> 'C. J. Cherryh'
],
];
$quote=$quotes[rand(0,count($quotes)-1)];
$quotetext= $quote['text'];
$quoteauthor= $quote['author'];
?>

<!DOCTYPE html>
</html>
<head>
<title> RANDOM QUOTE</title>
</head>
<body>
<blockquote>
<h2>&ldquo;<?php echo $quotetext?>&rdquo;</h2>
<strong>-<?php echo $quoteauthor;?></strong>
</blockquote>
</body>
</html>