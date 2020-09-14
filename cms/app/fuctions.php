<?php

//protects against attacks 
function e($text) {
		return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}	
?>