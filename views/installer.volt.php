<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Phalms - Installer Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
      body {
      margin-top:40px;
      }
      .stepwizard-step p {
          margin-top: 10px;
      }
      .stepwizard-row {
          display: table-row;
      }
      .stepwizard {
          display: table;
          width: 50%;
          position: relative;
      }
      .stepwizard-step button[disabled] {
          opacity: 1 !important;
          filter: alpha(opacity=100) !important;
      }
      .stepwizard-row:before {
          top: 14px;
          bottom: 0;
          position: absolute;
          content: " ";
          width: 100%;
          height: 1px;
          background-color: #ccc;
          z-order: 0;
      }
      .stepwizard-step {
          display: table-cell;
          text-align: center;
          position: relative;
      }
      .btn-circle {
          width: 30px;
          height: 30px;
          text-align: center;
          padding: 6px 0;
          font-size: 12px;
          line-height: 1.428571429;
          border-radius: 15px;
      }
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
</head>
<body>
  <div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
  <form id="setup-form" role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          <div class="form-group">
            <label class="control-label">Site Url</label>
            <input name="siteurl" maxlength="100" type="text" required="required" class="form-control" placeholder="Site Url"  />
          </div>
          <div class="form-group">
            <label class="control-label">Site Name</label>
            <input name="sitename" maxlength="100" type="text" required="required" class="form-control" placeholder="Site Name" />
          </div>  
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
          <p>Config Database Server</p>
          <div class="form-group">
            <label class="control-label">Database Adapter</label>
            <select name="dbadapter" required="required" class="form-control" >
              <option value="Mysql">MySQL</option>
              <option value="Postgresql">PostgreSql</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Database Server</label>
            <input name="dbserver" maxlength="100" type="text" required="required" class="form-control" placeholder="Database Server Host" />
          </div>
          <div class="form-group">
            <label class="control-label">Database Name</label>
            <input name="dbname" maxlength="100" type="text" required="required" class="form-control" placeholder="Database Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Database Username</label>
            <input name="dbusername" maxlength="100" type="text" required="required" class="form-control" placeholder="Database Username" />
          </div>
          <div class="form-group">
            <label class="control-label">Database Password</label>
            <input name="dbpassword" maxlength="100" type="text" required="required" class="form-control" placeholder="Database Password" />
          </div>
          <div class="form-group">
            <label class="control-label">Database Port</label>
            <input name="dbport" type="text" required="required" class="form-control" placeholder="Database Port" value="3306" />
          </div>
          <button id="dbconf" class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
          <div id="result"></div>
          <p>SMTP Email Config</p>
          <div class="form-group">
            <label class="control-label">SMTP Server</label>
            <input name="emailserver" maxlength="100" type="text" class="form-control" placeholder="SMTP Server" />
          </div>
          <div class="form-group">
            <label class="control-label">SMTP Port</label>
            <input name="emailport" maxlength="100" type="text" class="form-control" placeholder="SMTP Port" />
          </div>
          <div class="form-group">
            <label class="control-label">SMTP Username</label>
            <input name="emailuser" maxlength="100" type="text" class="form-control" placeholder="SMTP Username" />
          </div>
          <div class="form-group">
            <label class="control-label">SMTP Password</label>
            <input name="emailpass" maxlength="100" type="text" class="form-control" placeholder="SMTP Password" />
          </div>
          <div class="form-group">
            <label class="control-label">email Address</label>
            <input name="emailaddress" maxlength="100" type="text" class="form-control" placeholder="SMTP Password" />
          </div>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>
  <script type="text/javascript">
  $(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
    $("#setup-form").ajaxForm({
        url: '<?= $this->url->get('setup') ?>',
        type: 'post',
        success: function(data) {
            $.each($.parseJSON(data), function(k, v) {
              $("#result").append("<div class='alert alert-info'> "+v+" </div>")
          });
        }
    });
  });
  </script>
</body>
</html>