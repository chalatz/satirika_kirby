<?php if(!defined('KIRBY')) exit ?>

title: Poem
pages: false
files:
  sortable: true
fields:
  title:
    label: Τίτλος
    type:  text
  text:
    label: Κείμενο
    type:  textarea
  tags:
    label: Κατηγορίες
    type: tags
  date:
    label: Ημερομηνία
    type: date
    format: DD/MM/YYYY
    default: today
  time:
    label: Ώρα
    type: time
    interval: 60
    default: now
