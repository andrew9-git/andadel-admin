<?php

include('includes/header.php');
andadel_header('dashboard', 'Dashboard');

?>

<div class="home-content">
      <div class="post-area">
        <div class="info">
          <div class="card">
            <div class="card-header">
              <h4 class="admin-head">Subscribers</h4>
            </div>
            <div class="card-body">
              <div class="info-body">
                <h4 class="message-body">1000</h4>
                <i class="bx bx-user"></i>
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4 class="admin-head">Non-subscribers</h4>
            </div>
            <div class="card-body">
              <div class="info-body">
                <h4 class="message-body">5000</h4>
                <i class="bx bx-book"></i>
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="info-container">
          <div class="btn btn-danger">Total in email list: 6000
        </div>
        </div><br>
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Email</th>
                  <th>Number of emails recieved</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>andrew@gmail.com</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>andrew@gmail.com</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>andrew@gmail.com</td>
                  <td>10</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
          </div>
        </div><br>
        <div class="info">
          <div class="card">
            <div class="card-header">
              <h4 class="admin-head">Number of super admins</h4>
            </div>
            <div class="card-body">
              <div class="info-body">
                <h4 class="message-body">5</h4>
                <i class="bx bx-user"></i>
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4 class="admin-head">Number of basic admins</h4>
            </div>
            <div class="card-body">
              <div class="info-body">
                <h4 class="message-body">25</h4>
                <i class="bx bx-book"></i>
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="info-container">
          <div class="btn btn-danger">Total numbers of admin: 30
        </div>
        </div><br>
        <div class="card">
          <div class="card-header">
            <div class="info-container">
              <a href="all-admins" class="btn btn-success">see all admins</a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Email</th>
                  <th>See admin</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>andrew@gmail.com</td>
                  <td><a href="admin/4"><i class="bx bx-link-external"></i></a></td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>andrew@gmail.com</td>
                  <td><a href="admin/4"><i class="bx bx-link-external"></i></a></td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>andrew@gmail.com</td>
                  <td><a href="admin/4"><i class="bx bx-link-external"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
          </div>
        </div>
        <div class="info-container">
          <div class="btn btn-secondary last-login">last visited: 2021</div>
        </div>
      </div>
    </div>

<?php

    include('includes/footer.php');
    ckeditor();

?>