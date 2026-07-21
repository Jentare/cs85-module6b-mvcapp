# Jennifer Frei
# CS85 Section 1234
# Module 6 - Drum Practice Routine Manager (MVC Application)

## App Description
A PSR-4 compliant PHP MVC application designed to automate drum practice session planning. The app dynamically calculates time allocations for warmups, rudiments, grooves, and fills based on a selected session duration (15, 30, 45, 60 minutes) and displays the class ASCII drum tabs.

## Setup Instructions
1. **Clone the Repository:**
```bash
    git clone <https://github.com/Jentare/cs85-module6b-mvcapp>
    cd cs85-module6b-mvcapp
```
2. Run 'composer dump-autoload'
3. Serve the application via local web server
4. Go to `http://cs85-module6b-mvcapp.test/`

--

## Reflection and AI Critique

I chose to build a drum practice routine manager because I wanted a practical tool to automate daily practice session planning. Instead of manually deciding what to work on, the application dynamically breaks down session time into structured blocks for grooves, rudiments, and fills based on total available time.

The application follows the MVC pattern by separating concerns into distinct layers:
* DrumPractice model handles all data generation, time calculations, and drill structures.
* PracticeController processes user input from the query string, validates the requested session length, and passes the calculated routine payload directly to the view.
* view renders the routine using PHP templating and CSS formatting to present readable drum tabs and exercise instructions.

The hardest part of the project for me wasn't the PHP itself but managing and setting up the git repository. Early on I chose a different topic and deleted the repository I had created which causes some issues trying to remember what I had done for the previous topic versus the one I chose. Also things like setting up proper PSR-4 autoloading with Composer and ensuring all namespace paths matched the folder architecture perfectly. Resolving class resolution errors between App\Models and App\Controllers required paying close attention to file paths and namespace definitions within composer.json before dumping the autoloader. And lastly, it wasn't exactly hard but tedious to implement the correct drum notation and ensure it was all properly aligned so it displayed correctly.

Through this project, I gained a much clearer understanding of how MVC keeps code modular and maintainable. It works on the same core principle as separating HTML layout from CSS styling, or isolating class declarations from function logic in C++. Isolating logic inside the Model meant I could modify practice routines or exercise rules without altering how views display information or how controllers route user requests.

# Example AI Output
```php
public function calculateTimeSplits($duration) {
    return [
        'warmup' => $duration * 0.20,
        'rudiments' => $duration * 0.30,         'main' =>$duration * 0.50
    ];
}
```


Regarding AI code tools, while the generated method provided a basic math formula for time percentages, it lacked real-world context. The raw output returned abstract numbers rather than structured, usable practice plans. Manual intervention was necessary to build custom duration tiers, assign realistic minute allocations, and attach meaningful drum drills with ASCII tabs to make the output practical for actual practice.

