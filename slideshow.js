/* 

Creating a Automatic Slideshow using Java Script.

*/

var slideIndex = 0;
showSlides();

function showSlides() 
{
	var i;

    //Import the slides from HTML
	var slides = document.getElementsByClassName("mySlides");

    //Import the dots for the slideshow from HTML
	var dots = document.getElementsByClassName("dot");

	for (i = 0; i < slides.length; i++) 
	{
			slides[i].style.display = "none";  
	}

	slideIndex++;
	if (slideIndex > slides.length) 
    {
        slideIndex = 1;
    }

	for (i = 0; i < dots.length; i++) 
	{
		dots[i].className = dots[i].className.replace("active", "");
	}

	slides[slideIndex-1].style.display = "block";  
	dots[slideIndex-1].className += " active";

    //Automatically changes slide every 3 seconds
	setTimeout(showSlides, 3000);
}