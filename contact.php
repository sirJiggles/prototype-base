
<?php include('includes/header.inc.php'); ?>


<!-- Main content -->
<div id="main" role="main">

    <section id="content">

        <h2>Get in touch!</h2>
        
        <form method="post" action="/">
            <fieldset>
                <legend>Your Details</legend>

                <label for="name">Name: </label>
                <input type="text" name="name" id="name" required="required" placeholder="Your name" />

                <label for="phone">Phone: </label>
                <input type="tel" name="phone" id="phone" required="required" placeholder="Phone number" />

                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required="required" placeholder="Email" />

            </fieldset>

            <fieldset>
                <legend>Extra Information</legend>

                <label for="date">Date: </label>
                <input type="date" name="email" id="date" required="required"  />

                <label for="color">Color: </label>
                <input type="color" name="color" id="color" value="white" />

                <label for="message">Message: </label>
                <textarea value="" name="message"></textarea>
            </fieldset>

            <input type="submit" name="submit" value="Save" />
        </form>

    </section>

</div>

<?php include('includes/footer.inc.php');?>