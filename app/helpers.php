<?php

function dateFormat($time = null) {

	return \Carbon\Carbon::parse($time)->format('Y-m-d');
}
