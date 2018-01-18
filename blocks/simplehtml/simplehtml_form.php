<?php
require_once("{$CFG->libdir}/formslib.php");

class simplehtml_form extends moodleform {

    function definition() {

        $mform =& $this->_form;
        $mform->addElement('header','displayinfo', get_string('textfields', 'block_simplehtml'));

        // add page title element.
        $mform->addElement('text', 'pagetitle', get_string('pagetitle', 'block_simplehtml'));
        $mform->setType('pagetitle', PARAM_RAW);
        $mform->addRule('pagetitle', null, 'required', null, 'client');

        // add display text field
        $mform->addElement('htmleditor', 'displaytext', get_string('displayedhtml', 'block_simplehtml'));
        $mform->setType('displaytext', PARAM_RAW);
        $mform->addRule('displaytext', null, 'required', null, 'client');

        // files
        $mform->addElement('filepicker', 'filename', get_string('file'), null, array('accepted_types' => '*'));

        //add/choose a picture
        $mform->addElement('header', 'picfield', get_string('picturefields', 'block_simplehtml'), null, false);

        //yes or no for pic display
        $mform->addElement('selectyesno', 'displaypicture', get_string('displaypicture', 'block_simplehtml'));
        $mform->setDefault('displaypicture', 1);

        function block_simplehtml_images() {
            return array(html_writer::tag('img', '', array('alt' => get_string('red', 'block_simplehtml'), 'src' => "pix/picture0.gif")),
                        html_writer::tag('img', '', array('alt' => get_string('blue', 'block_simplehtml'), 'src' => "pix/picture1.gif")),
                        html_writer::tag('img', '', array('alt' => get_string('green', 'block_simplehtml'), 'src' => "pix/picture2.gif")));
        }

        // add image selector radio buttons
        $images = block_simplehtml_images();
        $radioarray = array();
        for ($i = 0; $i < count($images); $i++) {
            $radioarray[] =& $mform->createElement('radio', 'picture', '', $images[$i], $i);
        }
        $mform->addGroup($radioarray, 'radioar', get_string('pictureselect', 'block_simplehtml'), array(' '), FALSE);

        // add description field
        $attributes = array('size' => '50', 'maxlength' => '100');
        $mform->addElement('text', 'description', get_string('picturedesc', 'block_simplehtml'), $attributes);
        $mform->setType('description', PARAM_TEXT);

        $mform->addElement('hidden', 'blockid');
        $mform->addElement('hidden', 'courseid');

        $this->add_action_buttons();
      }
        // $mform->addElement('header', 'optional', get_string('optional', 'form'), null, false)
        // $mform->addElement('date_time_selector', 'displaydate', get_string('displaydate', 'block_simplehtml'), array('optional' => true));
        // $mform->setAdvanced('optional');
      }
