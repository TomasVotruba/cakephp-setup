<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
%>
<?xml version="1.0" encoding="UTF-8"?>
<phpunit
    colors="true"
    processIsolation="false"
    stopOnFailure="false"
    syntaxCheck="false"
    bootstrap="tests/bootstrap.php"
>
    <php>
        <!-- E_ALL & ~E_USER_DEPRECATED (16383)-->
        <!-- E_ALL (32767) -->
        <ini name="error_reporting" value="16383"/>
    </php>

    <!-- Add any additional test suites you want to run here -->
    <testsuites>
        <testsuite name="<%= $plugin %>">
            <directory>tests/TestCase/</directory>
        </testsuite>
    </testsuites>

    <!-- Setup a listener for fixtures -->
    <listeners>
        <listener class="\Cake\TestSuite\Fixture\FixtureInjector">
            <arguments>
                <object class="\Cake\TestSuite\Fixture\FixtureManager"/>
            </arguments>
        </listener>
    </listeners>

    <filter>
        <whitelist>
            <directory suffix=".php">src/</directory>
        </whitelist>
    </filter>

</phpunit>
