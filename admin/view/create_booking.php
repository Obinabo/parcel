<?php
require_once("../../app/config.php");
$title = "Create booking";
require_once('../include/user_header.php');
require_once('../include/user_navbar.php');
require_once('../include/user_sidebar.php');
$data = mysqli_query($dbc, "SELECT * FROM branch ORDER BY branch.id DESC");
?>
<div class="content-wrapper">
  <!-- Page header -->
  <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
    </div>
  </div>
  <div class="content">
    <?php if (!empty($_SESSION['booking'])) { ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="alert <?php if ($_SESSION['booking'] == 'success') {
                              echo 'bg-success';
                            } else {
                              echo 'bg-danger-800';
                            } ?> text-white alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <?php
            if ($_SESSION['booking'] == 'error') {
              echo 'An error occured.';
            }
            unset($_SESSION['booking']);
            ?>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header header-elements-inline">
            <h5 class="card-title">New booking</h5>
            <div class="header-elements">
            </div>
          </div>

          <div class="card-body">
            <form action="../app/admin/newbooking" enctype="multipart/form-data" method="post">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <legend class="font-weight-semibold"><i class="icon-file-text3 mr-2"></i> Product details</legend>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Type:</label>
                      <div class="col-lg-9">
                        <select data-placeholder="Select service" class="form-control form-control-select2" data-fouc required name="ship_type" data-dropdown-css-class="bg-slate-800">
                          <option></option>
                          <option value="transit">Transit</option>
                          <option value="express">Express</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Content:</label>
                      <div class="col-lg-9">
                        <select data-placeholder="Select content" class="form-control form-control-select2" data-fouc required name="ship_content" data-dropdown-css-class="bg-slate-800">
                          <option></option>
                          <option value="parcel">Parcel</option>
                          <option value="pallate">Pallate</option>
                          <option value="box">Box</option>
                          <option value="documents">Documents</option>
                          <option value="Cargo">Cargo</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Branch:</label>
                      <div class="col-lg-9">
                        <select data-placeholder="Select branch" class="form-control form-control-select2" data-fouc required name="ship_branch" data-dropdown-css-class="bg-slate-800">
                          <option></option>
                          <?php while ($branch = mysqli_fetch_array($data)) { ?>
                            <option value="<?php echo $branch['id']; ?>"><?php echo $branch['name']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Weight:</label>
                      <div class="col-lg-9">
                        <input type="text" placeholder="Weight of goods" name="quantity" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Price (paid):</label>
                      <div class="col-lg-9">
                        <input type="number" step="any" placeholder="Price" name="price" class="form-control" required>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Current location:</label>
                      <div class="col-lg-9">
                        <input type="text" placeholder="Location of cargo" name="current_location" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Delivery date:</label>
                      <div class="col-lg-9">
                        <input type="date" placeholder="Date" name="delivery_date" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Shipment status:</label>
                      <div class="col-lg-9">
                        <select data-placeholder="Select service" class="form-control form-control-select2" data-fouc required name="ship_status" data-dropdown-css-class="bg-slate-800">
                          <option></option>
                          <option value="In transit">In transit</option>
                          <option value="Moved further">Moved further</option>
                          <option value="Shipment arrived">Shipment arrived</option>
                          <option value="Despatched for delivery">Despatched for delivery</option>
                          <option value="Delivered">Delivered</option>
                          <option value="Hold">Hold</option>
                          <option value="Returned">Returned</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Package photo:</label>
                      <input type="file" name="file" class="form-input-styled" data-fouc>
                      <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                    </div> 
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i>Receiver Shipping details</legend>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Name:</label>
                      <div class="col-lg-9">
                        <input type="text" name="r_name" placeholder="full name" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Phone:</label>
                      <div class="col-lg-9">
                        <input type="text" placeholder="+99-99-9999-9999" name="r_phone" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Address:</label>
                      <div class="col-lg-9">
                        <input type="text" placeholder="Address" name="r_address" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Country of Reciever:</label>
                      <div class="col-lg-9">
                        <div class="mb-3">
                          <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc id="country" name="country" required data-dropdown-css-class="bg-slate-800">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">State:</label>
                      <div class="col-lg-9">
                        <div class="mb-3">
                          <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc id="state" name="state" required data-dropdown-css-class="bg-slate-800">
                          </select>
                        </div>
                      </div>
                    </div>
                    

                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i>Sender Shipping details</legend>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Name:</label>
                      <div class="col-lg-9">
                        <input type="text" name="s_name" placeholder="full name" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Phone:</label>
                      <div class="col-lg-9">
                        <input type="text" placeholder="+99-99-9999-9999" name="s_phone" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Address:</label>
                      <div class="col-lg-9">
                        <input type="text" placeholder="Address" name="s_address" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">Country Of Departure:</label>
                      <div class="col-lg-9">
                        <div class="mb-3">
                          <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc id="scountry" name="scountry" required data-dropdown-css-class="bg-slate-800">
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label">State:</label>
                      <div class="col-lg-9">
                        <div class="mb-3">
                          <select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc id="sstate" name="sstate" required data-dropdown-css-class="bg-slate-800">
                          </select>
                        </div>
                      </div>
                    </div>
                    
                  </fieldset>
                </div>
              </div>

              <div class="text-right">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("../include/user_footer.php"); ?>
    <script language="javascript">
      populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
      populateCountries("scountry", "sstate");
    </script>