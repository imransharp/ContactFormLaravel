<!-- resources/views/messages/create.blade.php -->

<!DOCTYPE html>
<html>
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST MESSAGES</title>
    <style>
        /* Inline CSS */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f6f9;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
        }
        button:hover {
            background-color: #0056b3;
        }

           /* Basic styling for the success message */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
        
    </style>

</head>
<body>

<!-- @if (session('success'))
    <p>{{ session('success') }}</p>
@endif -->

<form action="{{ route('message.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Your Name:</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label for="description">Your Message:</label>
        <textarea name="description" required></textarea>
    </div>

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    <button type="submit">Save Message</button>
</form>

</body>
</html>
