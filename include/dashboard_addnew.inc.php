 <!-- ADD NEW MEMBER SECTION -->
 <div class="new__section">
     <div class="header__section uk-container">
         <h3 class="uk-heading-line uk-text-center admin__header">
             <span>Add New Members </span>
         </h3>
         <hr id="custom__divider" />
     </div>

     <div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
         <div class="uk-width-1-1">
             <div class="uk-container">
                 <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                     <div class="uk-width-1-1@m">
                         <div
                             class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-large uk-card-body uk-box-shadow-large uk-flex-center">
                             <img class="uk-card-title card__avatar" src="<?=$AssetsUrl?>/images/avatar.png"
                                 alt="new member" />
                             <form method="POST" autocomplete="off">
                                 <div class="uk-margin">
                                     <div class="uk-inline uk-width-1-1">
                                         <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                         <input class="uk-input uk-form-large" type="text" id="name"
                                             placeholder="Full Name" />
                                     </div>
                                 </div>
                                 <div class="uk-margin">
                                     <div class="uk-inline uk-width-1-1">
                                         <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                         <input class="uk-input uk-form-large" type="text" id="username"
                                             placeholder="User Name" />
                                     </div>
                                 </div>
                                 <div class="uk-margin">
                                     <div class="uk-inline uk-width-1-1">
                                         <select name="position" id="position" class="uk-select uk-form-large">
                                             <option value="">Select Position</option>
                                             <option value="Member">Member</option>
                                             <option value="Commander">Commander</option>
                                             <option value="Commandant">Commandant</option>
                                             <option value="Secetary">Secetary</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="uk-margin">
                                     <div class="uk-inline uk-width-1-1">
                                         <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                         <input class="uk-input uk-form-large" type="text" id="webmail"
                                             placeholder="amaizing.blessing@lmu.edu.ng" />
                                     </div>
                                 </div>
                                 <div class="uk-margin">
                                     <div class="uk-inline uk-width-1-1">
                                         <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                         <input class="uk-input uk-form-large" type="password" id="password"
                                             placeholder="Password" />
                                     </div>
                                 </div>
                                 <div class="uk-margin">
                                     <div class="uk-inline uk-width-1-1">
                                         <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                         <input class="uk-input uk-form-large" type="password" id="confirmPassword"
                                             placeholder="Re-Enter Password" />
                                     </div>
                                 </div>
                                 <div class="uk-margin">
                                     <button
                                         class="uk-button uk-button uk-button-large uk-width-1-1 lmu__btn__success uk-form-icon-flip"
                                         uk-icon="icon: check" id="addUser">
                                         Register
                                     </button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ADD NEW MEMBER SECTION -->