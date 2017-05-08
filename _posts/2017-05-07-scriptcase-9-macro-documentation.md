---
layout: post
title: "ScriptCase 9 Macro Documentation"
date: 2017-05-07 16:56:22
tags:
- scriptcase
---

<section >
	<h2>SQL</h2>
	<div class="macro-box">
		<h3 id="sc_begin_trans">sc_begin_trans</h3>
		<p>This macro starts a set of transations in the database.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_change_connection">sc_change_connection</h3>
		<p>This macro dynamically change the application connections.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_commit_trans">sc_commit_trans</h3>
		<p>This macro effective a set of transations in the database.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_concat">sc_concat</h3>
		<p>With this macro you can concat fields on select for every database.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_connection_edit">sc_connection_edit</h3>
		<p>This macro edits an existing connection at runtime.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_connection_new">sc_connection_new</h3>
		<p>This macro creates new connections dinamically.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_error_continue">sc_error_continue</h3>
		<p>This macro deactivates the Scriptcase standard database error treatment message for an event.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_error_delete">sc_error_delete</h3>
		<p>This macro configure the variable that contains the database error message that can occurs during the exclusion of a record.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_error_insert">sc_error_insert</h3>
		<p>This macro configure the variable that contains the database error message that can occurs during the addition of a record.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_error_update">sc_error_update</h3>
		<p>This macro configure the variable that contains the database error message that can occurs during the update of a record.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_exec_sql">sc_exec_sql</h3>
		<p>This macro execute SQL commands passed as parameter or a SQL command in the SQL field action type.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_lookup">sc_lookup</h3>
		<p>This macro executes a SELECT command stored in the second parameter and returns the data in a variable.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_change_connection">sc_reset_change_connection</h3>
		<p>This macro erases the changes made using “sc_change_connection”.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_connection_edit">sc_reset_connection_edit</h3>
		<p>This macro undoes the connection edits made by macro “sc_connection_edit”.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_connection_new">sc_reset_connection_new</h3>
		<p>This macro undoes the connections made by the macro “sc_connection_new”.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_rollback_trans">sc_rollback_trans</h3>
		<p>This macro discards a set of transations in the data base.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_select">sc_select</h3>
		<p>This macro executes the commands passed in the second parameter and returns the dataset in a variable.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_select_field">sc_select_field</h3>
		<p>This macro modify dynamically a field that will be recovered in the grid.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_select_order">sc_select_order</h3>
		<p>This macro modify dynamically the grids “ORDER BY” clause field.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_select_where">sc_select_where</h3>
		<p>This macro adds dynamically a condition to the grid WHERE clause.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_fetchmode">sc_set_fetchmode</h3>
		<p>This macro allows to change the type of return from the dataset of the select commands</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_sql_injection">sc_sql_injection</h3>
		<p>This macro it used protect the field/variable against “SQL injection”.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_sql_protect">sc_sql_protect</h3>
		<p>This macro protects the value passed as parameter according with the used database.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_where_current">sc_where_current</h3>
		<p>This macro its used to make a reference of the where clause currently used.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_where_orig">sc_where_orig</h3>
		<p>This macro saves the where clause content of the original application select.</p>
	</div>
</section>

<section>
	<h2>Date</h2>
	<div class="macro-box">
		<h3 id="sc_date">sc_date</h3>
		<p>This macro calculates and returns increments and decrements using dates.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_date_conv">sc_date_conv</h3>
		<p>This macro converts the date field passed as parameter with an input format to another field with an output format.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_date_dif">sc_date_dif</h3>
		<p>This macro calculates the difference between two dates (passed as parameters) returning the result in days.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_date_dif_2">sc_date_dif_2</h3>
		<p>This macro calculates the difference between two dates returning the amount of days, months and years.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_date_empty">sc_date_empty</h3>
		<p>This macro checks if a date field its empty retuning a boolean.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_time_diff">sc_time_diff</h3>
		<p>Calculate difference in hours, returning the amount of hours, minutes and seconds.</p>
	</div>
</section>

<section>
	<h2>Control</h2>
	<div class="macro-box">
		<h3 id="sc_ajax_javascript">sc_ajax_javascript</h3>
		<p>This macro allows the execution of JavaScript methods in form/control events</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_alert">sc_alert</h3>
		<p>This macro shows a Javascript alert message screen.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_apl_conf">sc_apl_conf</h3>
		<p>This macro modify the application execution property.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_calc_dv">sc_calc_dv</h3>
		<p>This macro calculate verify digits.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_changed">sc_changed</h3>
		<p>This macro returns “true” if the field name have been changed.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_confirm">sc_confirm</h3>
		<p>This macro shows a Javascript confirm screen.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_decode">sc_decode</h3>
		<p>This macro returns the encrypted field or variable to its original value.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_encode">sc_encode</h3>
		<p>This macro returns the field or variable with the content encrypted.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_error_exit">sc_error_exit</h3>
		<p>This macro Interrupts the application execution if there are error messages generated by the macro “sc_error_message”.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_error_message">sc_error_message</h3>
		<p>This macro generate an error message.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_exit">sc_exit</h3>
		<p>This macro forces the application exit.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_getfield">sc_getfield</h3>
		<p>This macro assign the properties of a field to a javascript variable.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_get_language">sc_get_language</h3>
		<p>This macro returns the abbreviation of the language used.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_get_regional">sc_get_regional</h3>
		<p>This macro returns the abbreviation of the regional settings used.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_get_theme">sc_get_theme</h3>
		<p>This macro returns the application theme name.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_groupby_label">sc_groupby_label</h3>
		<p>This macro dynamically modify the field label displayed in groupby lines.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_image">sc_image</h3>
		<p>This macro loads images passed as parameter to use in the application.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_include">sc_include</h3>
		<p>This macro its used to “include” PHP routines.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_include_lib">sc_include_lib</h3>
		<p>This macro its used to select dynamically the application libraries.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_include_library">sc_include_library</h3>
		<p>This macro includes a PHP file from a library in the application.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_label">sc_label</h3>
		<p>This macro its used to modify dynamically the grid form field label.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_language">sc_language</h3>
		<p>This macro returns the language and regional settings.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_link">sc_link</h3>
		<p>This macro dynamically creates or modifies links between grid applications and other applications.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_log_add">sc_log_add</h3>
		<p>This macro will add a register into the log table.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_log_split">sc_log_split</h3>
		<p>This macro returns what was inserted in the “description” field of the log table in an array format.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_mail_send">sc_mail_send</h3>
		<p>This macro its used to send e-mails.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_make_link">sc_make_link</h3>
		<p>This macro is used to create a string with the link data to another application.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_master_value">sc_master_value</h3>
		<p>This macro update a Master Application object from a Detail Application.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_redir">sc_redir</h3>
		<p>This macro its used to redirects to other application or URL.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_global">sc_reset_global</h3>
		<p>This macro delete session variables received as parameter.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_seq_register">sc_seq_register</h3>
		<p>This macro provide the register sequential number.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_global">sc_set_global</h3>
		<p>This macro its used to register session variables.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_groupby_rule">sc_set_groupby_rule</h3>
		<p>Macro is used to select an specific GROUP BY rule.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_language">sc_set_language</h3>
		<p>This macro allows to dynamically change the application language.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_regional">sc_set_regional</h3>
		<p>This macros allows to dynamically change the application regional settings.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_theme">sc_set_theme</h3>
		<p>This macro its used to dinamically define the application themes.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_site_ssl">sc_site_ssl</h3>
		<p>This macro verifies if its been used a safe/secure site. (https protocol)</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_trunc_num">sc_trunc_num</h3>
		<p>This macro its used to set the number of decimals.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_url_exit">sc_url_exit</h3>
		<p>This macro modifies the application exit URL.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_url_library">sc_url_library</h3>
		<p>This macro returns the path of a file, inside a library, to be used on the applications.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_warning">sc_warning</h3>
		<p>This macro dynamically activates or deactivates warning messages control.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_webservice">sc_webservice</h3>
		<p>This macro is used to communicate with a web service.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_zip_file">sc_zip_file</h3>
		<p>This macro its used to generate ZIP files from a file list and/or directories.</p>
	</div>
</section>

<section>
	<h2>Filter</h2>
	<div class="macro-box">
		<h3 id="sc_where_filter">sc_where_filter</h3>
		<p>This macro its used to save the where clause content generated through the filter form.</p>
	</div>
</section>

<section>
	<h2>Security</h2>
	<div class="macro-box">
		<h3 id="sc_apl_status">sc_apl_status</h3>
		<p>This macro Activate/Deactivate the applications at user level.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_ldap_login">sc_ldap_login</h3>
		<p>This macro establish the connection with the user credentials.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_ldap_logout">sc_ldap_logout</h3>
		<p>Macro used to release the connection after using the macro sc_ldap_login</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_ldap_search">sc_ldap_search</h3>
		<p>Macro to perform searches in the LDAP.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_apl_conf">sc_reset_apl_conf</h3>
		<p>This macro deletes all the modifications effected by “sc_apl_conf” macro.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_apl_status">sc_reset_apl_status</h3>
		<p>This macro deletes all the application security status variables.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_menu_delete">sc_reset_menu_delete</h3>
		<p>This macro restores a menu item structure. (removed by the macro “sc_menu_delete”).</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_reset_menu_disable">sc_reset_menu_disable</h3>
		<p>This macro its used to enable a menu item structure. (disabled by the macro “sc_menu_disable”).</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_user_logout">sc_user_logout</h3>
		<p>Macro used to log the user out to the system.</p>
	</div>
</section>

<section>
	<h2>Shows</h2>
	<div class="macro-box">
		<h3 id="sc_ajax_message">sc_ajax_message</h3>
		<p>This macro allows the application to display customized messages.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_ajax_refresh">sc_ajax_refresh</h3>
		<p>Macro to refresh a Grid</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_block_display">sc_block_display</h3>
		<p>This macro dynamically show/hide the fields of a specific block.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_color">sc_field_color</h3>
		<p>This macro changes the color of a determined field text.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_disabled">sc_field_disabled</h3>
		<p>This macro its used to block a field to get any data that would be typed on it.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_disabled_record">sc_field_disabled_record</h3>
		<p>This macro has the objective to block the typing on determined fields in the Forms.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_display">sc_field_display</h3>
		<p>This macro dynamically display or not a specific field.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_init_off">sc_field_init_off</h3>
		<p>This macro is intended to inhibit the query fields on the initial load.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_readonly">sc_field_readonly</h3>
		<p>This macro dynamically set a form field attribute to ‘“Read-Only”</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_field_style">sc_field_style</h3>
		<p>This macro allolws to modify dinamically the grid field style.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_format_num">sc_format_num</h3>
		<p>This macro its used to format numerical values.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_format_num_region">sc_format_num_region</h3>
		<p>This macro has the objective to format numbers, using the regional settings</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_form_show">sc_form_show</h3>
		<p>This macro dynamically show or not the form.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_get_groupby_rule">sc_get_groupby_rule</h3>
		<p>This macro provides the name of the groupby rule running at the time.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_hide_groupby_rule">sc_hide_groupby_rule</h3>
		<p>Macro used to disable Group By rules.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_set_focus">sc_set_focus</h3>
		<p>This macro its used to set the focus to a form field.</p>
	</div>
</section>

<section>
	<h2>Buttons</h2>
	<div class="macro-box">
		<h3 id="sc_btn_copy">sc_btn_copy</h3>
		<p>This macro returns “true” when the “copy” button is selected in a form.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_btn_delete">sc_btn_delete</h3>
		<p>This macro returns “true” when the “Delete” button is selected in a form.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_btn_display">sc_btn_display</h3>
		<p>This macro shows and hides buttons on the toolbar in execution time.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_btn_insert">sc_btn_insert</h3>
		<p>This macro returns “true” when the “Add” button is selected in a form.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_btn_new">sc_btn_new</h3>
		<p>This macro returns “true” when the “Add New” button is selected in a form.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_btn_update">sc_btn_update</h3>
		<p>This macro returns “true” when the “Save” button is selected in a form.</p>
	</div>
</section>

<section>
	<h2>PDF</h2>
	<div class="macro-box">
		<h3 id="sc_set_pdf_name">sc_set_pdf_name</h3>
		<p>This macro will change the grid’s exported files name.</p>
	</div>
</section>

<section>
	<h2>Menu</h2>
	<div class="macro-box">
		<h3 id="sc_appmenu_add_item">sc_appmenu_add_item</h3>
		<p>This Macro adds dinamically an item to the menu.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_appmenu_create">sc_appmenu_create</h3>
		<p>This macro dynamically creates a menu item.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_appmenu_exist_item">sc_appmenu_exist_item</h3>
		<p>This macro checks if there is a menu item.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_appmenu_remove_item">sc_appmenu_remove_item</h3>
		<p>This macro removes dynamically a menu item.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_appmenu_reset">sc_appmenu_reset</h3>
		<p>This macro reset the array used in the dinamically creation of a menu application.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_appmenu_update_item">sc_appmenu_update_item</h3>
		<p>This macro updates a menu item.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_btn_disable">sc_btn_disable</h3>
		<p>Macro used to disable Menu buttons.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_menu_delete">sc_menu_delete</h3>
		<p>This macro remove items of the menu structure.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_menu_disable">sc_menu_disable</h3>
		<p>This macro deactivate menu structure items.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_menu_force_mobile">sc_menu_force_mobile</h3>
		<p>Macro used to force the creation of menus to mobile devices.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_menu_item">sc_menu_item</h3>
		<p>This macro Identifies the menu item selected.</p>
	</div>
	<div class="macro-box">
		<h3 id="sc_script_name">sc_script_name</h3>
		<p>This macro identifies the application name that was selected in the menu.</p>
	</div>
</section>