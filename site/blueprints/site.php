<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Τίτλος
    type:  text
  author:
    label: Συγγραφέας
    type:  text
  description:
    label: Περιγραφή
    type:  textarea
  FrontPageNum:
    label: Ποιήματα στην Αρχική Σελίδα
    type: number
    default: 6    
  pageNum:
    label: Ποιήματα ανά Σελίδα
    type: number
    default: 6
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
