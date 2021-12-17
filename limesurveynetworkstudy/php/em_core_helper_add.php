# uncomment to enable pph syntax highlighting <?php
# Line 232:
'checkNG' => array('exprmgr_checkNG', 'LEMcheckNG', $this->gT('Checks NG input fields'), 'boolean checkNG(pos, arg1, ..., argN)', '', -3),
'randNG' => array('exprmgr_randNG', 'LEMrandNG', $this->gT('Returns a random ng value'), 'int randNG(arg1, ..., argN)', '', -1),
'uniqueToFirst' => array('exprmgr_uniqueToFirst', 'LEMuniqueToFirst', $this->gT('Checkes whether there is another value in the list like the [position]th'), 'boolean uniqueToFirst(group, position, arg1, ..., argN)', '', -1),
'sliderOnClick' => array('exprmgr_sliderOnClick', 'LEMsliderOnClick', $this->gT('Displays slider handle'), 'boolean sliderOnClick(q-code)', '', -1),

# Substiteu Lines 585-590: Replace "%" with the number of name generators (also consider question groups before the NGs!)
						// SH: only check for group above NG groups:
						if ($this->groupSeq >5) { 
							if (($groupSeq != -1 && $this->groupSeq != -1) && ($groupSeq > $this->groupSeq))
							{
								$this->RDP_AddError($this->gT("Variable not declared until a later page"),$token);
								return false;
							}
						}
						
# Line 3531:
/**
 * SH:
 * Check whether either ...
 * ...the entry before i is not empty or
 * ...any value after is not empty
 * @param type $args
 */
function exprmgr_checkNG($args)
{
	// error handling:
	if (sizeof($args) < 2) {
        echo $this->gT('At least two arguments need to be provided!');
		return false;
	}
	
	$pos = array_shift($args);
		
	if ($pos < 2) {
        echo $this->gT('Position may not be smaller than 2!');
		return false;
	}
	
	if (sizeof($args) < $pos) {
        echo $this->gT('Position may not be greater than length of items!');
		return false;
	}
	
	if (($args[$pos - 2] != '') && ($args[$pos - 2] != NULL)) {
		//var_dump($args[$pos - 2]);
		return true;
	}
	
    foreach (range($pos, sizeof($args)) as $i)
    {
		//var_dump($args[$i - 1]);
		if (($args[$i - 1] != '') && ($args[$i - 1] != NULL)) {
			return true;
		}
    }
    return false;
}


/**
 * SH:
 * 1st param: number n of names to sample
 * 2nd-nth.	: sampled names vars
 * (n+1)th-x: name vars
 *
 * @param type $args
 */
function exprmgr_randNG($args)
{	
	$current = array_shift($args);
	$n = array_shift($args);
	
	// array of already sampled names:
	$sampled = array();

	// remaining non-empty names:
	$names = array();
	
	// extract first arguments as already sampled names
	foreach (range(0, $current - 2) as $i) {
		$sampled[$i] = array_shift($args);
	}
	
	foreach (range($current, $n) as $j) {
		array_shift($args);
	}
	
	// copy non-empty vars and not already sampled names:
	$counter = -1;
    foreach ($args as $arg) {
		// TODO
		if (($arg != NULL) and ($arg != '') and (!in_array($arg, $sampled))) {
			$counter = $counter + 1;
			$names[$counter] = $arg;
		}
    }
	// return rand(0, $counter);//var_dump($names);
	if ($counter == -1) {
		return '';
	}
	
    return $names[rand(0, $counter)];
}

/**
 * SH:
 * Returns true if all non-empty values are different from the ith entry
 * @param type $args
 */
function exprmgr_uniqueToFirst($args)
{	
	$group = array_shift($args);
	$i = array_shift($args) + ($group - 1) * 25 ;

	$current = $args[intval($i) - 1];
	
	if (trim($current)=='')
	{
		return true;
	}
	
	if (strpos($current,',') or strpos($current,';'))
	{
		return false;
	}
	
	unset($args[intval($i) - 1]);
	
    foreach ($args as $arg)
    {
        if (trim($arg)=='')
        {
            continue;   // ignore blank answers
        }
        if ($arg == $current)
        {
            return false;
        }
    }
    return true;
}

/**
 * SH:
 * Since the slider function is only relevant in JavaScript
 * it retruns true always.
 * @param type $args
 */
function exprmgr_sliderOnClick($args)
{
	return true;
}

# uncomment to enable pph syntax highlighting ?> 