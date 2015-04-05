<?php
if (!isset($_SESSION["username"])) {
	redirect("admin_login?error=2");
}