/* 
Creating a Automatic Slideshow using Java Script:
For this milestore, we created a slideshow in our homepage using Java Script. 
The pictures for the slideshow are sourced in the HTML page.
The display properties of the slideshow are handled in the CSS page.
*/

//Initialize the slide index
var slideIndex = 0;
showSlides();

function showSlides() 
{
	var i;

    //Import the slides from HTML
	var slides = document.getElementsByClassName("mySlides");

    //Import the dots for the slideshow from HTML
	var dots = document.getElementsByClassName("dot");

	//Set the slides to none first.
	for (i = 0; i < slides.length; i++) 
	{
			slides[i].style.display = "none";  
	}

	//Increment the slideshow index
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