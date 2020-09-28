<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        <div>
            <label for="lastName">Last Name :</label>
            <input type="text" id="lastName" name="user_last_name"></input>
        </div>
        <div>
            <label for="firstName">First Name :</label>
            <input type="text" id="firstName" name="user_first_name"></input>
        </div>
        <div>
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="user_email"></input>
        </div>
        <div>
            <label for="phone">Phone number :</label>
            <input type="tel" id="phone" name="user_phone"></input>
        </div>
        <div>
            <label for="subject">Subject :</label>
                <select id="subject" name="subject">
                    <option>Information request</option>
                    <option>Membreship</option>
                    <option>Other</option>             
                </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" cols="30" rows="10"></textarea>
        </div>
        <div class="button">
            <button type="submit">Send</button>
        </div>
    </form>
</body>
</html>
