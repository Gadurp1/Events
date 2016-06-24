@extends('spark::layouts.app')
@section('content')

<home :user="user" inline-template>
  <div class="container">
      <!-- Application Dashboard -->
      <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default panel-flush">
                <div class="panel-heading">
                    Kiosk
                </div>

                <div class="panel-body">
                    <div class="spark-settings-tabs">
                        <ul class="nav spark-settings-stacked-tabs" role="tablist">
                            <!-- Announcements Link -->
                            <li role="presentation" >
                                <a href="#announcements" aria-controls="announcements" role="tab" data-toggle="tab">
                                    <i class="fa fa-fw fa-btn fa-bullhorn"></i>Announcements
                                </a>
                            </li>

                            <!-- Metrics Link -->
                            <li role="presentation">
                                <a href="#metrics" aria-controls="metrics" role="tab" data-toggle="tab">
                                    <i class="fa fa-fw fa-btn fa-bar-chart"></i>Metrics
                                </a>
                            </li>
                            <li ><a>Overview</a></li>
                            <li class="list-group-item">Logging In</li>
                            <li class="list-group-item">Dashboard</li>
                          </div>
                        </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel panel-body panel-default">
            <h2 >Overview</h2>
            <hr>
            <p>
              Here is where you can find details on how to use the CCC
              Reporting Site, also known as the Client Portal. The Client
              Portal is where you can access detailed information about
              your claims, accounts, checks, pending cases and a lot more!
            </p>
          </div>
          <div class="panel panel-body panel-default">
            <h2>Logging In</h2>
            <hr>
            <p>
              You must log on to access the reporting site, using a valid password for your account. Your username and password are initially provided by CCC.
            </p>
            <p>
              To log on, click the “Client Login” button on the top right corner of the main CCC website. You may also use this link in any browser: https://www.chicagoclearing.com/reporting/login.php
            </p>
              <p>
              Enter your username and password into the login dialog, select the “I Agree with the Terms” checkbox, and click the “Login” button below. If you are authenticated by the system, you will be served the main page for the Client Portal.
              </p>
              <p>
              If you forgot your password, click the “Forgot your password” link to reset your password.
              </p>
              <p>
              Common password issues include: caps lock is on (turn it off).
              </p>
              <p>
              Remember the CCC portal currently supports one login per client. Clients who have multiple users must share the login/password.
              CCC main page
              </p>
            </div>
            <div class="panel panel-body panel-default">
              <h2>Dashboard</h2>
              <hr>
              <p>The Notifications tab is the default main page of the Client Portal. There are 12 tabs in the Client Portal. Each tab has different functions. All tabs share the same top menu and left menu.The top menu contains links back to the main CCC website. All tabs share the same widgets; on the right side is the Feedback widget; on the bottom right of the page are Upload and Help links.</p>
              <br>
              <div class="row">
                <img src="img/dash.png" class="col-md-12 im-responsive" alt="" />
              </div>
              <br>
              <p>
                The Notifications tab displays data alerts and statuses. Look here to check if you need to do anything to maintain your service.
              </p>
              <p>
                Beneficial Owner Information (BOI) needs to be complete for all your sub accounts, as required by the claims administrators to prevent fraudulent claims. This file needs to submitted and updated yearly. If BOI is needed, the relevant case and accounts are displayed in the BOI notification. If your BOI is up-to-date, the BOI notification will display as up-to-date.
              </p>
              <p>
                CCC requires data updates every 6 months to provide excellent service.The data notification displays the date we last received data from you, and the date range of the data itself; that is, the date range of the historical trades in the data you sent.When it’s time to send more data, you’ll know where you last left off. If you have allocations pending, a notification will appear on both the top and the right side with details.
              </p>
            </div>

            <div class="panel panel-body panel-default">
              <h2>Settings > Security</h2>
              <hr>
              <p>
                The Settings tab (shown expanded above) provides a link to the password reset dialog (right).
              </p>
              <b>
                Password requirements:
              </b>
                <li class="list-group-item">
                  Must be at least 8 characters.
                </li>
                <li class="list-group-item">
                  Must have uppercase and lowercase.
                </li>
                <li class="list-group-item">
                  Must have at least one number.
                </li>
                <li class="list-group-item">
                  Must have at least one non alphanumeric character.
                </li>
                <div class="alert alert-danger">
                  <p>
                    CCC does not store your password unencrypted, so we cannot find it for you. If you wish, CCC can assign a temporary password for you, which you can use once to log in and then change to a permanent password.
                  </p>
                </div>
              <p>
                Remember the CCC portal currently supports one login per client. Clients who have multiple users must share the login/password.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
