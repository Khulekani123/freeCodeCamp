<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "with=device-width, initial-scale=1.0">
        <title> Online Catering Service </title>
        <link rel ="stylesheet" href="bstyle.css">
    </head>
    <body class= "main_bg">
        <div class = "bform">
            <div class = "bfrom-text">
                <h1><span><img src = "pundrulu.png" alt=""></span> Book Us Now</h1>
                <p>
                    We pride ourselves on creating unique menus
                    to accommodate every special event in South Africa. From casual in-home
                    brunches and office lunches to elegant weddings and various events.

                    Pundrulu Catering is a subsidiary of Dream Foods Inc.
                </p>
            </div>
            <div class = "main-form">
                <form action="index.php" method="get">
                    <div>
                        <span>Your full name ?</span>
                        <input type = "text" name = "name" id = "name" placeholder= "First name" required>
                    </div>
                    <div>
                        <span>Your surnme ?</span>
                        <input type = "text" name = "surname" id = "surname" placeholder= "Surname" required>
                    </div>
                    <div>
                        <span>Your email address ?</span>
                        <input type = "email" name = "email" id = "email" placeholder= "someone@example.com" required>
                    </div>
                    <div>
                        <span>Your phone number ?</span>
                        <input type = "number" name = "number" id = "number" placeholder= "(+27)" required>
                    </div>
                   
                    <div>
                        <span>Any other type of event: specify</span>
                        <input type = "text" name = "name" id = "name">
                    </div>
                    <div>
                        <span>Number of guests ?</span>
                        <input type = "number" name = "name" id = "name" required>
                    </div>
                    <div>
                        <span>Event Date ?</span>
                        <input type = "datetime" name = "date" id = "date" placeholder= "dd/mm/yyyy" required>
                    </div>
                    <div>
                        <span>Your budget ?</span>
                        <input type = "number" name = "budget" id = "budget" placeholder= "R0.00" required>
                    </div>
                    <div>
                        <span>Event Address ?</span>
                        <input type = "text" name = "address" id = "address" placeholder= "Address" required>
                    </div>
                    <div>
                        <span>Any other details</span>
                        <input type = "text" name = "other" id = "other">
                    </div>
                    <div class = "row">
                        <div class = "col-25">
                          <label for = "service">Service Requesting ?</label>
                        </div>
                        <div class = "col-75">
                        <select id = "service" name = "service">
                            <option value = "wedding"> Wedding </option>
                            <option value = "wedding"> Graduation Party </option>
                            <option value = "wedding"> Birthday Party</option>
                            <option value = "wedding"> Annivesary </option>
                            <option value = "wedding"> Meetings </option>
                            <option value = "wedding"> Funeral </option>
                            <option value = "wedding"> Church Service </option>
                            <option value = "wedding"> Business Function </option>
                            <option value = "wedding"> Traditional Ceremony </option>
                        </select>
                    </div>
                    </div>
                    <div id = "submit">
                        <input type = "submit" value = "SUBMIT" name = "other" id = "other">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>