<?php


#	Errors
class H2o_Error extends Exception {}
if (!class_exists('ParseError')){
    class ParseError extends H2o_Error {}
}
class TemplateNotFound extends H2o_Error {}
class TemplateSyntaxError extends H2o_Error {}
