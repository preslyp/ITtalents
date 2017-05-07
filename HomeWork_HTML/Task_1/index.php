<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Employee</title>
</head>

<body>
    <div class="container">
        <section>
            <form action="#" method="post" accept-charset="utf-8">
                <table>
                    <thead>
                        <tr><th><h1>Add Employee</h1></th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <div class="firstname">
                                <td>
                                    <label for="firstname">First name:</label>
                                </td>
                                <td>
                                    <input id="firstname" type="text" name="firstname" value="John">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="lastname">
                                <td>
                                    <label for="lastname">Last name:</label>
                                </td>
                                <td>
                                    <input id="lastname" type="text" name="lastname" value="Wayne">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="title">
                                <td>
                                    <label for="title">Title:</label>
                                </td>
                                <td>
                                    <input id="title" type="text" name="job" value="Sales Representative" size="22">
                                </td>
                            </div>
                        </tr>
                        <tr>

                        <div class="courtesy">                            
                            <td>
                                <label for="courtesy">Title of Courtesy:</label>
                            </td>
                            <td>
                                <?php $titleOfCourtesy = array("Dr.", "Mr.", "Mrs.","Ms."); ?>
                                
                                <?php foreach ($titleOfCourtesy as $courtesy): ?>

                                     <input <?php if ($courtesy == "Mr.") { echo 'checked'; } ?> id="courtesy" type="radio" name="dr" value="<?php echo  $courtesy; ?>"><?php echo  $courtesy; ?></input>
                                    
                                <?php endforeach ?>

                            </td>
                        </div>
                        </tr>
                        <tr>
                            <div class="birthmonth">
                                <td>
                                    <label for="birthmonth">Birth date:</label>
                                </td>
                                <td>

                                    <?php $months = array(  "January", "Febuary", "March", 
                                                            "April", "May", "June", 
                                                             "July","August", "September",
                                                            "October", "October", "December"); 
                                    ?>

                                    <select id="birthmonth" name="birthmonth">

                                        <?php foreach ($months as $month): ?>

                                            <option <?php if ($month == "May") { echo 'selected="selected"';} ?> value="<?php echo $month; ?>"><?php echo $month; ?> </option>
                                            
                                        <?php endforeach ?>                                        

                                    </select>

                                    <select name="birthday">

                                        <?php for ($day=1; $day <= 31 ; $day++): ?>

                                            <option <?php if ($day==27 ) { echo 'selected="selected"'; } ?> value="<?php echo $day; ?>"> <?php echo $day; ?> </option>

                                        <?php endfor ?>

                                    </select>

                                    <select name="birthyear">

                                        <?php for ($year=1900; $year <= 2017; $year++): ?>
                                            
                                            <option <?php if ($year==1907) { echo 'selected="selected"'; } ?> value="<?php echo $year; ?>"> <?php echo $year; ?> </option>

                                        <?php endfor ?>

                                    </select>
                               </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="hiremonth">
                                <td>
                                    <label for="hiremonth">Hire date:</label>
                                </td>
                                <td>
                                    <select id="hiremonth" name="hiremonth">

                                        <?php foreach ($months as $month): ?>

                                            <option <?php if ($month == "January") { echo 'selected="selected"';} ?> value="<?php echo $month; ?>"><?php echo $month; ?> </option>
                                            
                                        <?php endforeach ?>

                                    </select>
                                     <select name="hireday">

                                        <?php for ($day=1; $day <= 31 ; $day++): ?>

                                            <option <?php if ($day==10 ) { echo 'selected="selected"'; } ?> value="<?php echo $day; ?>"> <?php echo $day; ?> </option>
                                        
                                        <?php endfor ?>

                                    </select>

                                    <select name="hireyear">

                                        <?php for ($year=1900; $year <= 2017; $year++): ?>
                                            
                                            <option <?php if ($year==2005) { echo 'selected="selected"'; } ?> value="<?php echo $year; ?>"> <?php echo $year; ?> </option>

                                        <?php endfor ?>

                                    </select>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="adress">
                                <td>
                                    <label for="adress">Adress:</label>
                                </td>
                                <td>
                                    <input id="adress" type="text" name="adress" value="1 Cowboy Lane" size="40">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="city">
                                <td>
                                    <label for="city">City:</label>
                                </td>
                                <td>
                                    <input id="city" type="text" name="city" value="Winterset" size="22">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="region">
                                <td>
                                    <label for="region">Region:</label>
                                </td>
                                <td>
                                    <input id="region" type="text" name="region" value="IA" size="1">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="code">
                                <td>
                                    <label for="code">Postal Code:</label>
                                </td>
                                <td>
                                    <input id="code" type="text" name="code" value="50273" size="8">
                                </td>
                             </div>
                        </tr>
                        <tr>
                            <div class="country">
                                <td>
                                    <label for="country">Country:</label>
                                </td>
                                <td>
                                    <input id="country" type="text" name="country" value="USA" size="3">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="phone">
                                <td>
                                    <label for="phone">Phone:</label>
                                </td>
                                <td>
                                    <input id="phone" type="tel" name="phone" value="515-555-1212" size="12">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="extension">
                                <td>
                                    <label for="extension">Extension:</label>
                                </td>
                                <td>
                                    <input id="extension" type="text" name="extension" value="1212" size="3">
                                </td>
                            </div>
                        </tr>
                        <tr>
                        <div class="note">
                            <td>
                                <label for="note">Notes:</label>
                            </td>
                        </div>
                        </tr>
                    </tbody>
                </table>
                <div class="area">
                    <textarea id="note" name="area" rows="5" cols="60">Before joining Northwing, John dabbled in acting in Western movies.
                </textarea>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <div class="managers">
                                <td>
                                    <label for="managers">Manager:</label>
                                </td>
                                <td>

                                    <?php $managers = array("Anrew Fuller", "John Smith", "Bon Scot"); ?>

                                    <select name="managers">

                                        <?php foreach ($managers as $manager): ?>

                                            <option id="managers" <?php if ($manager == "Anrew Fuller") { echo 'selected="selected"'; }?> value="<?php echo $manager; ?>"><?php echo $manager; ?> </option>
                                            
                                        <?php endforeach ?>

                                    </select>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="password">
                                <td>
                                    <label for="password">Password:</label>
                                </td>
                                <td>
                                    <input id="password" type="password" name="password" value="******">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="confirm">
                                <td>
                                    <label for="confirm_password">Repeat Password:</label>
                                </td>
                                <td>
                                    <input id="confirm_password" type="password" name="confirm" value="******">
                                </td>
                            </div>
                        </tr>
                    </tbody>
                </table>
                <div class="submit">
                    <input type="submit" name="submit" value="Add Employee">
                </div>
            </form>
        </section>
    </div>
</body>

</html>