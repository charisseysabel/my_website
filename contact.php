<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron work_title">
  <div class="container">
    <h1>Get in touch</h1>
  </div>
</div>

<div class="container">
      <section>
        <p>Inquiries and / or greetings are all welcome!<br>
          Please fill out the form and I will reply to you as soon as I can.</p>
      </section>
    </div>

<div class="container send_note">
      <div class="form_container">
        <form method="post" action="../send_a_msg.php">
          <p>Name<span class="asterisk">&#42;</span>
            <input type="text" placeholder="eg.Charisse De Torres" name="name" required/>
          </p>
          
          <p>Email<span class="asterisk">&#42;</span>
            <input type="email" placeholder="eg. cydetorres@gmail.com" name="email" required/>
          </p>

          <p id="msg_label">Message<span class="asterisk">&#42;</span>
            <textarea cols="60" rows="10" name="message" required></textarea>
          </p>

          <p id="submit_notice">You will receive a copy of your form for reference.
            I promise to keep your details private.
          </p>
          <button name="submit">Submit</button>
        </form>
      </div>
    </div>

<?= (file_get_contents("./templates/footer.php") )?>