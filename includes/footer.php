<?php

function ckeditor($page = '')
{
  $hostname='http://localhost:9090/andadel-admin/';  
?>
</section>
<?php
    if($page === 'settings')
    {?>
    <div class="modal" id="photo-modal">
    <div class="card">
      <div class="card-header">
        <div class="close" id="photo-close">&times;</div>
        <h4 class="message-head">Upload photo</h4>
      </div>
      <div class="card-body">
        <form action="" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" name="csrf" value="" id="csrf">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" id="upload-photo">
            </div>
            <button type="submit" name="send-mail" class="btn btn-primary">Upload</button>
        </form>
      </div>
      <div class="card-footer">
        <div class="thanks">The accepted file type is jpeg, jpg and png</div>
      </div>
    </div>
  </div>
  <div class="modal" id="password-modal">
    <div class="card">
      <div class="card-header">
        <div class="close" id="password-close">&times;</div>
        <h4 class="message-head">Update My password</h4>
      </div>
      <div class="card-body">
        <form action="">
          <div class="form-group">
              <input type="hidden" class="form-control" name="csrf" value="" id="csrf">
          </div>
          <div class="form-group">
            <label for="old-password">Old password*</label>
            <input type="password" class="form-control" name="old-password" id="old-password">
          </div>
          <div class="form-group">
            <label for="new-password">New password*</label>
            <input type="password" class="form-control" name="new-password" id="new-password">
          </div>
          <div class="form-group">
            <label for="confirm-new-password">Confirm new password*</label>
            <input type="password" class="form-control" name="confirm-new-password" id="confirm-new-password">
          </div>
          <button type="submit" name="update-password" class="btn btn-primary">Update</button>
      </form>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
  <div class="modal" id="account-modal">
    <div class="card">
      <div class="card-header">
        <div class="close" id="account-close">&times;</div>
        <h4 class="message-head">Delete My Account</h4>
      </div>
      <div class="card-body">
        <div class="delete-account-container">
          <div>
            <div class="delete-account-notification-wrapper">
              <i class="bx bx-alarm-exclamation delete-notification"></i> <span class="delete-account-notification-text">Deleting your account will</span>
            </div>
            <div>
              <ul class="delete-account-notification-list">
                <li>Erase your account from bwajes+</li>
                <li>Delete all your posts</li>
              </ul>
            </div>
            <form action="">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="csrf" value="" id="csrf">
                </div>
                <button name="send-mail" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="thanks">This action is irreversible!</div>
      </div>
    </div>
  </div>
<?php } ?>
<div class="modal" id="rate-modal">
    <div class="card">
      <div class="card-header">
        <div class="close" id="rate-close">&times;</div>
        <!-- <h4 class="message-head">About</h4> -->
      </div>
      <div class="card-body">
        <div style="display:flex;align-items:center;justify-content:center;">
            <div style="width: 95%;">
                <!-- <h3>What is Andadel?</h3>
                <p>A software & programming company that provides cutting edge digital products that help shape people and their businesses</p>
                <h3>What does Andadel do?</h3>
                <p>We create digital products that serves as a platform that helps you and your business(es) grow by providing you with the necessary tools that simplifies your work, manage your work better and gets your job done faster ─ thereby making you and your business(es) become highly productive!</p> -->
                <h3>The mission that defines Andadel's spirit</h3>
                <p>Building digital products that makes a difference and add meaning to lives</p>
                <h3>Our goal</h3>
                <p>To make FREE digital products that is secure, light, fast, simple and easy to use</p>
                <h3>Our vision</h3>
                <p>To be a leading indigenous African digital company in the world</p>
            </div>
        </div>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
  <script src="<?php echo $hostname .'assets/js/script.js'; ?>"></script>
</body>
</html>
<?php
}

ob_end_flush();

?>