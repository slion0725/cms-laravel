@extends('components.layout')

@section('content')
    <!-- off-canvas-left + menu -->
    @include('components.menu')
    <!-- off-canvas-right + profile + search + show + add + edit -->
    <div>
        <!-- profile -->
        @include('components.profile')
        <!-- search -->
        <div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-search">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    Search
                </div>
                <div class="card-body align-self-stretch">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-name" class="col-form-label col-form-label-sm">Name</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-name" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-email" class="col-form-label col-form-label-sm">Email</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-email" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-phone" class="col-form-label col-form-label-sm">Phone</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-phone" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-address" class="col-form-label col-form-label-sm">Address</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-address" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-birthday" class="col-form-label col-form-label-sm">Birthday</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-birthday" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-status" class="col-form-label col-form-label-sm">Status</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-status" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-created_at" class="col-form-label col-form-label-sm">Created At</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-created_at" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="search-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="search-updated_at" placeholder="text">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <legend class="col-sm-3 col-form-label col-form-label-sm pt-0">Radios</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="search-radios" id="search-radio1-radios" value="option1" checked>
                                <label class="form-check-label" for="search-radio1-radios">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="search-radios" id="search-radio2-radios" value="option2">
                                <label class="form-check-label" for="search-radio2-radios">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="search-radios" id="search-radio3-radios" value="option3" disabled>
                                <label class="form-check-label" for="search-radio3-radios">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <legend class="col-sm-3 col-form-label col-form-label-sm pt-0">Checkboxes</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="search-checkboxes" id="search-checkbox1-checkboxes" value="option1"
                                    checked>
                                <label class="form-check-label" for="search-checkbox1-checkboxes">
                                    First checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="search-checkboxes" id="search-checkbox2-checkboxes" value="option2">
                                <label class="form-check-label" for="search-checkbox2-checkboxes">
                                    Second checkbox
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="checkbox" name="search-checkboxes" id="search-checkbox3-checkboxes" value="option3"
                                    disabled>
                                <label class="form-check-label" for="search-checkbox3-checkboxes">
                                    Third disabled checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
                    <a href="#" class="text-primary mr-4">Search</a>
                    <a href="#" class="text-info mr-4">Clear</a>
                </div>
            </div>
        </div>
        <!-- show -->
        <div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-show">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    Show
                </div>
                <div class="card-body align-self-stretch">
                    <dl>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <hr>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
                        <hr>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <hr>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <hr>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
                        <hr>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <hr>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <hr>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
                        <hr>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <hr>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <hr>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
                        <hr>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <hr>
                    </dl>
                </div>
                <div class="card-footer">
                    <a href="#" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
                </div>
            </div>
        </div>
        <!-- add -->
        <div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-add">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    Add
                </div>
                <div class="card-body align-self-stretch">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-name" class="col-form-label col-form-label-sm">Name</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-name" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-email" class="col-form-label col-form-label-sm">Email</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-email" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-phone" class="col-form-label col-form-label-sm">Phone</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-phone" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-address" class="col-form-label col-form-label-sm">Address</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-address" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-birthday" class="col-form-label col-form-label-sm">Birthday</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-birthday" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-status" class="col-form-label col-form-label-sm">Status</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-status" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-created_at" class="col-form-label col-form-label-sm">Created At</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-created_at" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="add-updated_at" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="add-tags" class="col-form-label col-form-label-sm">Tags</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" id="add-tags" multiple="multiple">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI" disabled="disabled">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                                <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                <option value="TPZ">The Panic Zone</option>
                                <option value="TTZ">The Twilight Zone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <legend class="col-sm-3 col-form-label col-form-label-sm pt-0">Radios</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="add-radios" id="add-radio1-radios" value="option1" checked>
                                <label class="form-check-label" for="add-radio1-radios">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="add-radios" id="add-radio2-radios" value="option2">
                                <label class="form-check-label" for="add-radio2-radios">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="add-radios" id="add-radio3-radios" value="option3" disabled>
                                <label class="form-check-label" for="add-radio3-radios">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <legend class="col-sm-3 col-form-label col-form-label-sm pt-0">Checkboxes</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="add-checkboxes" id="add-checkbox1-checkboxes" value="option1" checked>
                                <label class="form-check-label" for="add-checkbox1-checkboxes">
                                    First checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="add-checkboxes" id="add-checkbox2-checkboxes" value="option2">
                                <label class="form-check-label" for="add-checkbox2-checkboxes">
                                    Second checkbox
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="checkbox" name="add-checkboxes" id="add-checkbox3-checkboxes" value="option3" disabled>
                                <label class="form-check-label" for="add-checkbox3-checkboxes">
                                    Third disabled checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
                    <a href="#" class="text-primary mr-4">Save</a>
                </div>
            </div>
        </div>
        <!-- edit -->
        <div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-edit">
            <div class="card d-flex flex-column h-100">
                <div class="card-header">
                    Edit
                </div>
                <div class="card-body align-self-stretch">
                    <nav>
                        <div class="nav nav-tabs d-flex flex-nowrap">
                            <!-- tabs -->
                            <a class="nav-item nav-link active" href="#navtab-tab1" data-toggle="tab">Tab1</a>
                            <a class="nav-item nav-link" href="#navtab-tab2" data-toggle="tab">Tab2</a>
                            <a class="nav-item nav-link" href="#navtab-tab3" data-toggle="tab">Tab3</a>
                            <a class="nav-item nav-link" href="#navtab-tab4" data-toggle="tab">Tab4</a>
                            <a class="nav-item nav-link" href="#navtab-tab5" data-toggle="tab">Tab5</a>
                            <a class="nav-item nav-link" href="#navtab-tab6" data-toggle="tab">Tab6</a>
                            <a class="nav-item nav-link" href="#navtab-tab7" data-toggle="tab">Tab7</a>
                            <a class="nav-item nav-link" href="#navtab-tab8" data-toggle="tab">Tab8</a>
                            <a class="nav-item nav-link" href="#navtab-tab9" data-toggle="tab">Tab9</a>
                            <a class="nav-item nav-link" href="#navtab-tab10" data-toggle="tab">Tab10</a>
                            <a class="nav-item nav-link" href="#navtab-tab11" data-toggle="tab">Tab11</a>
                            <a class="nav-item nav-link" href="#navtab-tab12" data-toggle="tab">Tab12</a>
                            <a class="nav-item nav-link" href="#navtab-tab13" data-toggle="tab">Tab13</a>
                            <a class="nav-item nav-link" href="#navtab-tab14" data-toggle="tab">Tab14</a>
                            <a class="nav-item nav-link" href="#navtab-tab15" data-toggle="tab">Tab15</a>
                            <a class="nav-item nav-link" href="#navtab-tab16" data-toggle="tab">Tab16</a>
                            <a class="nav-item nav-link" href="#navtab-tab17" data-toggle="tab">Tab17</a>
                            <a class="nav-item nav-link" href="#navtab-tab18" data-toggle="tab">Tab18</a>
                            <a class="nav-item nav-link" href="#navtab-tab19" data-toggle="tab">Tab19</a>
                            <a class="nav-item nav-link" href="#navtab-tab20" data-toggle="tab">Tab20</a>
                        </div>
                    </nav>
                    <div class="tab-content">
                        <!-- tab -->
                        <div class="tab-pane pt-2 show active" id="navtab-tab1">
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-name" class="col-form-label col-form-label-sm">Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-name" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-email" class="col-form-label col-form-label-sm">Email</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-email" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-phone" class="col-form-label col-form-label-sm">Phone</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-phone" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-address" class="col-form-label col-form-label-sm">Address</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-address" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-birthday" class="col-form-label col-form-label-sm">Birthday</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-birthday" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-status" class="col-form-label col-form-label-sm">Status</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-status" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-created_at" class="col-form-label col-form-label-sm">Created At</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-created_at" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" id="edit-updated_at" placeholder="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="edit-tags" class="col-form-label col-form-label-sm">Tags</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="edit-tags" multiple="multiple">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI" disabled="disabled">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-sm-3 col-form-label col-form-label-sm pt-0">Radios</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="edit-radios" id="edit-radio1-radios" value="option1" checked>
                                        <label class="form-check-label" for="edit-radio1-radios">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="edit-radios" id="edit-radio2-radios" value="option2">
                                        <label class="form-check-label" for="edit-radio2-radios">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="edit-radios" id="edit-radio3-radios" value="option3" disabled>
                                        <label class="form-check-label" for="edit-radio3-radios">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-sm-3 col-form-label col-form-label-sm pt-0">Checkboxes</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="edit-checkboxes" id="edit-checkbox1-checkboxes" value="option1" checked>
                                        <label class="form-check-label" for="edit-checkbox1-checkboxes">
                                            First checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="edit-checkboxes" id="edit-checkbox2-checkboxes" value="option2">
                                        <label class="form-check-label" for="edit-checkbox2-checkboxes">
                                            Second checkbox
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="checkbox" name="edit-checkboxes" id="edit-checkbox3-checkboxes" value="option3" disabled>
                                        <label class="form-check-label" for="edit-checkbox3-checkboxes">
                                            Third disabled checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane pt-2" id="navtab-tab2">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="edit-content" class="col-form-label col-form-label-sm">Content</label>
                                </div>
                                <div class="col-sm-12">
                                    <textarea id="edit-content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane pt-2" id="navtab-tab3">Tab-3</div>
                        <div class="tab-pane pt-2" id="navtab-tab4">Tab-4</div>
                        <div class="tab-pane pt-2" id="navtab-tab5">Tab-5</div>
                        <div class="tab-pane pt-2" id="navtab-tab6">Tab-6</div>
                        <div class="tab-pane pt-2" id="navtab-tab7">Tab-7</div>
                        <div class="tab-pane pt-2" id="navtab-tab8">Tab-8</div>
                        <div class="tab-pane pt-2" id="navtab-tab9">Tab-9</div>
                        <div class="tab-pane pt-2" id="navtab-tab10">Tab-10</div>
                        <div class="tab-pane pt-2" id="navtab-tab11">Tab-11</div>
                        <div class="tab-pane pt-2" id="navtab-tab12">Tab-12</div>
                        <div class="tab-pane pt-2" id="navtab-tab13">Tab-13</div>
                        <div class="tab-pane pt-2" id="navtab-tab14">Tab-14</div>
                        <div class="tab-pane pt-2" id="navtab-tab15">Tab-15</div>
                        <div class="tab-pane pt-2" id="navtab-tab16">Tab-16</div>
                        <div class="tab-pane pt-2" id="navtab-tab17">Tab-17</div>
                        <div class="tab-pane pt-2" id="navtab-tab18">Tab-18</div>
                        <div class="tab-pane pt-2" id="navtab-tab19">Tab-19</div>
                        <div class="tab-pane pt-2" id="navtab-tab20">Tab-20</div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
                    <a href="#" class="text-primary mr-4">Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
    <div class="container-fluid">
        <!-- breadcrumb -->
        <ul class="breadcrumb py-2 px-0 mb-2">
            <li class="breadcrumb-item">
                <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Plugin</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Class</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Function</a>
            </li>
            <li class="breadcrumb-item active">List</li>
        </ul>
        <!-- button -->
        <div class="scroll-btn">
            <div class="btn-item">
                <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-format-line-spacing mr-1"></i>
                    <span id="tablePageLen">10</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" onclick="tablePageLen(10)">10</a>
                    <a class="dropdown-item" href="#" onclick="tablePageLen(25)">25</a>
                    <a class="dropdown-item" href="#" onclick="tablePageLen(50)">50</a>
                    <a class="dropdown-item" href="#" onclick="tablePageLen(100)">100</a>
                </div>
            </div>
            <a href="#" class="btn-item">
                <i class="mdi mdi-minus-box-outline mr-1"></i>Select
            </a>
            <a href="#" class="btn-item">
                <i class="mdi mdi-checkbox-blank-outline mr-1"></i>Select
            </a>
            <a href="#" class="btn-item">
                <i class="mdi mdi-checkbox-marked-outline mr-1"></i>Select
            </a>
            <a href="#" class="btn-item" id="offcanvas-search-btn">
                <i class="mdi mdi-magnify mr-1"></i>Search
            </a>
            <a href="#" class="btn-item" id="offcanvas-show-btn">
                <i class="mdi mdi-view-list mr-1"></i>Show
            </a>
            <a href="#" class="btn-item" id="offcanvas-add-btn">
                <i class="mdi mdi-plus mr-1"></i>Add
            </a>
            <a href="#" class="btn-item" id="offcanvas-edit-btn">
                <i class="mdi mdi-pencil mr-1"></i>Edit
            </a>
            <a href="#" class="btn-item" id="del-btn">
                <i class="mdi mdi-delete mr-1"></i>Del
            </a>
            <a href="#" class="btn-item" id="del-btn">
                <i class="mdi mdi-download mr-1"></i>Download
            </a>
        </div>
        <!-- table -->
        @include('components.table')
    </div>
@endsection