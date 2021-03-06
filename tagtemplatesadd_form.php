<?php

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once("$CFG->libdir/formslib.php");

class tagtemplatesadd_form extends moodleform {

    //Add elements to form
    public function definition() {
        global $CFG;

        $mform = $this->_form; // Don't forget the underscore! 

        $mform->addElement('text', 'tag', get_string('tagtag', 'booking')); // Add elements to your form
        $mform->setType('tag', PARAM_NOTAGS);                   //Set type of element
        $mform->addRule('tag', null, 'required', null, 'client');
        
        $mform->addElement('textarea', 'text', get_string('tagtext', 'booking')); // Add elements to your form
        $mform->setType('text', PARAM_NOTAGS);                   //Set type of element
        $mform->addRule('text', null, 'required', null, 'client');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_RAW);
        
        $this->add_action_buttons(TRUE, get_string('savenewtagtemplate', 'booking'));
    }

    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }

}