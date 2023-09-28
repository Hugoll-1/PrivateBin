<?xml version="1.0"?>
<ruleset name="My first PHPMD rule set"
         xmlns="http://pmd.sf.net/ruleset/1.0.0"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://pmd.sf.net/ruleset/1.0.0
                       http://pmd.sf.net/ruleset_xml_schema.xsd"
         xsi:noNamespaceSchemaLocation="
                       http://pmd.sf.net/ruleset_xml_schema.xsd">
  <description>
    My custom rule set that checks my code...
  </description>

  <rule ref="rulesets/codesize.xml" />
  <rule ref="rulesets/cleancode.xml" />
  <rule ref="rulesets/controversial.xml" />
  <rule ref="rulesets/design.xml" />
  <rule ref="rulesets/naming.xml" />
  <rule ref="rulesets/unusedcode.xml" />
</ruleset>
