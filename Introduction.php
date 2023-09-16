<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-Oriented Programming (OOP) in PHP - Introduction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Object-Oriented Programming (OOP) in PHP - Introduction</h1>

    <p><strong>What is OOP?</strong></p>
    <p>Object-Oriented Programming (OOP) is a programming paradigm that uses objects and classes for structuring code. It's based on the concept of "objects," which can contain both data (attributes) and functions (methods).</p>

    <p><strong>Why use OOP?</strong></p>
    <p>OOP promotes code reusability, modularity, and easier maintenance. It allows you to model real-world entities and their interactions more naturally.</p>

    <p><strong>Basic OOP Terminology:</strong></p>
    <ul>
        <li><strong>Class:</strong> A blueprint or template for creating objects. It defines the properties (attributes) and behaviors (methods) an object will have.</li>
        <li><strong>Object:</strong> An instance of a class. Objects are created from classes and represent specific entities.</li>
        <li><strong>Property (Attribute):</strong> A variable that holds data related to an object.</li>
        <li><strong>Method:</strong> A function associated with an object that defines its behavior.</li>
        <li><strong>Inheritance:</strong> A mechanism where a new class can inherit properties and methods from an existing class.</li>
        <li><strong>Encapsulation:</strong> The concept of bundling data (properties) and methods (functions) that operate on that data into a single unit (an object).</li>
        <li><strong>Polymorphism:</strong> The ability of different classes to be treated as instances of the same class through a common interface.</li>
    </ul>

    <p><strong>Defining a Class:</strong></p>
    <pre><code>
class Car {
    // Properties (Attributes)
    public $brand;
    public $model;
    public $year;

    // Methods (Behaviors)
    public function startEngine() {
        echo "Starting the engine...&lt;br&gt;";
    }

    public function stopEngine() {
        echo "Stopping the engine...&lt;br&gt;";
    }
}
    </code></pre>

    <p><strong>Creating Objects (Instances):</strong></p>
    <pre><code>
$myCar = new Car();
$myCar-&gt;brand = "Toyota";
$myCar-&gt;model = "Camry";
$myCar-&gt;year = 2022;

$anotherCar = new Car();
$anotherCar-&gt;brand = "Honda";
$anotherCar-&gt;model = "Civic";
$anotherCar-&gt;year = 2023;
    </code></pre>

    <p><strong>Accessing Properties and Calling Methods:</strong></p>
    <pre><code>
echo "My car is a {$myCar-&gt;year} {$myCar-&gt;brand} {$myCar-&gt;model}.&lt;br&gt;";
$myCar-&gt;startEngine();

echo "Another car is a {$anotherCar-&gt;year} {$anotherCar-&gt;brand} {$anotherCar-&gt;model}.&lt;br&gt;";
$anotherCar-&gt;startEngine();
    </code></pre>

    <p><strong>Output:</strong></p>
    <pre>
My car is a 2022 Toyota Camry.
Starting the engine...

Another car is a 2023 Honda Civic.
Starting the engine...
    </pre>

</body>
</html>
