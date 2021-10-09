
  <form method="post" class="w3-container">
  <div id="signup_response"></div>

       
      <p>
          <label> Username </label>
          <input type="text" id="username" name="username" placeholder="Username" class="w3-input">
      </p> 
      <p>
          <label> Email </label>
          <input type="email" id="email" name="email" placeholder="Email" class="w3-input">
      </p>
      <p>
          <label> Password </label>
          <input type="password" name="password" id="password" placeholder="Password" class="w3-input">
      </p>
      <p>
          <label> Photo </label> <br>
          <input type="file" name="photo" id="photo" class="">
      </p>
      <input type="submit" value="Signup" class="btn" onclick="return false" onmousedown="signUp()">
  </form>
