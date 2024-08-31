const text = "Mark Joel Dela Cruz";
const typingSpeed = 150; // Speed of typing
const erasingSpeed = 100; // Speed of erasing
const delayBetween = 1000; // Delay before switching between typing and erasing (in ms)
let index = 0;
let isErasing = false;

function typeLetter() {
    const element = document.getElementById("name");

    // Cursor effect
    const cursor = '<span class="blinking-cursor">|</span>';

    if (!isErasing && index < text.length) {
        element.innerHTML = text.substring(0, index + 1) + cursor;
        index++;
        setTimeout(typeLetter, typingSpeed);
    } else if (isErasing && index > 0) {
        element.innerHTML = text.substring(0, index - 1) + cursor;
        index--;
        setTimeout(typeLetter, erasingSpeed);
    } else {
        isErasing = !isErasing;
        setTimeout(typeLetter, delayBetween);
    }
}

// Start the typing effect
typeLetter();