<?php

namespace space\space1;

function display(){
	echo 'space\space1<br/>';
}

namespace space\space2;

function display(){
	echo 'space\space2<br/>';
}



namespace space;

function display(){
	echo 'space<br/>';
}

display();

// space1\display();

// space2\display();

\space\display();

\space\space2\display();