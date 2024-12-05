input[type='radio'], input[type='checkbox'] {
    accent-color: <?= $vars['theme']['primary']; ?>;
}

.onoffswitch-checkbox:checked + .onoffswitch-label {
    background-color: <?= $vars['theme']['primary']; ?>;
}

.onoffswitch-checkbox:checked + .onoffswitch-label, .onoffswitch-checkbox:checked + .onoffswitch-label:before {
    border-color: <?= $vars['theme']['primary']; ?>;
}

.dash-card-content h3 a, .dash-card-content h3 a:active, .dash-card-content h3 a:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.wizard-body a, .wizard-body a:active, .wizard-body a:hover, wizard-body a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

.content-2col a:not(.glyphicon), .content-2col a:active, .content-2col a:hover, .content-2col a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

.note-editing-area a, .note-editing-area a:active, .note-editing-area a:hover, .note-editing-area a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

.footer a, .footer a:active, .footer a:hover, .footer a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

.pagination > .active > span {
    background-color: <?= $vars['theme']['primary']; ?> !important;
    border-color: <?= $vars['theme']['primary']; ?> !important;
}

.pagination a {
    color: <?= $vars['theme']['primary']; ?> !important;
}

.customer-contacts a, .customer-contacts a:active, .customer-contacts a:hover, .customer-contacts a:focus {
    color: <?= $vars['theme']['primary']; ?> !important;
}

.navbar-default {
    background-color: <?= $vars['theme']['primary']; ?>;
    border-color: #e7e7e7;
}

/* Logo */
.navbar-default .navbar-brand:hover {
    color: #5e5e5e;
    background-color: <?= $vars['theme']['hover']; ?>;
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: <?= $vars['theme']['primary']; ?>;
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > li > a:hover {
    color: <?= $vars['theme']['secondary']; ?>;
    background-color: <?= $vars['theme']['hover']; ?>;
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
    background-color: <?= $vars['theme']['secondary']; ?>;
    color: <?= $vars['theme']['primary']; ?>;
}

.dropdown-menu a, .dropdown-menu a:active, .dropdown-menu a:hover, .dropdown-menu a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

.dropdown-menu .glyphicon {
    color: <?= $vars['theme']['primary']; ?> !important;
}

.sidebar-menu a {
    color: <?= $vars['theme']['primary']; ?> !important;
}

.sidebar-menu .active a, .sidebar-menu .active .glyphicon {
    color: <?= $vars['theme']['primary']; ?> !important;
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.sidebar-menu-toggle.active {
    background-color: <?= $vars['theme']['primary']; ?> !important;
    border-color: <?= $vars['theme']['primary']; ?> !important;
}

.sidebar-buttons a:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.select2-results__option--highlighted {
    background-color: <?= $vars['theme']['primary']; ?> !important;
}

.section-heading {
    background-color: <?= $vars['theme']['secondary']; ?>;
    color: <?= $vars['theme']['hover']; ?>;
}

.panel-heading {
    background-color: <?= $vars['theme']['secondary']; ?> !important;
}

.btn-primary, .note-editor .btn-primary {
    color: #fff !important;
    background-color: <?= $vars['theme']['primary']; ?>;
    border-color: <?= $vars['theme']['primary']; ?>;
}

.btn-primary:active, .note-editor .btn-primary:active {
    color: #fff;
    background-color: <?= $vars['theme']['secondary']; ?> !important;
    border-color: <?= $vars['theme']['secondary']; ?> !important;
}

.btn-primary:hover, .note-editor .btn-primary:hover {
    color: #fff;
    background-color: <?= $vars['theme']['hover']; ?>;
    border-color: <?= $vars['theme']['hover']; ?>;
}

.btn-bordered {
    color: <?= $vars['theme']['primary']; ?>;
    background-color: <?= $vars['theme']['secondary']; ?>;
    border-color: <?= $vars['theme']['primary']; ?>;
}

.btn-bordered:active {
    color: <?= $vars['theme']['hover']; ?>;
    background-color: <?= $vars['theme']['secondary']; ?>;
    border-color: <?= $vars['theme']['hover']; ?>;
}

.btn-bordered:hover {
    color: <?= $vars['theme']['hover']; ?>;
    background-color: <?= $vars['theme']['secondary']; ?>;
    border-color: <?= $vars['theme']['hover']; ?>;
}

.btn-link {
    color: <?= $vars['theme']['primary']; ?>;
}

.btn-link:active {
    color: <?= $vars['theme']['secondary']; ?>;
}

.btn-link:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.btn-trans:hover, .btn-trans:focus {
    color: <?= $vars['theme']['hover']; ?>;
}

.btn:focus, btn:active:focus {
    outline-style: none;
}

.table-conversations thead {
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.table-conversations th a, .table-conversations th a:hover, .table-conversations th a:focus, .table-conversations th span {
    color: <?= $vars['theme']['hover']; ?>;
}

#conv-toolbar {
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.conv-actions .conv-action {
    color: <?= $vars['theme']['hover']; ?>;
}

.conv-actions .conv-action:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.help-inline {
    margin-top: 5px;
    margin-bottom: 10px;
    margin-left: 7px;
    color: #93a1af;
}

.main-heading {
    background-color: <?= $vars['theme']['secondary']; ?>;
}


.theme-colours .btn {
	margin-right: 5px;
}
.theme-colours .btn:active,
.theme-colours .btn.active {
	-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .8);box-shadow: inset 0 3px 5px rgba(0, 0, 0, .8);
}
#colour-label {
    text-transform: capitalize;
}
.theme-grey {
    background-color: #97a4b0;
}
.theme-grey:hover {
    background-color: #8897a6;
}
.theme-green {
    background-color: #52ad67;
}
.theme-green:hover {
    background-color: #24963f;
}
.theme-blue {
    background-color: #349DE9;
}
.theme-blue:hover {
    background-color: #0C5DD2;
}
.theme-orange {
    background-color: #F68F33;
}
.theme-orange:hover {
    background-color: #e38330;
}
.theme-purple {
    background-color: #8c75bd;
}
.theme-purple:hover {
    background-color: #6d53a3;
}
.theme-red {
    background-color: #F0554F;
}
.theme-red:hover {
    background-color: #E52F28;
}
.theme-brown {
    background-color: #9e6937;
}
.theme-brown:hover {
    background-color: #844204;
}
