package com.colosa.qa.automatization;

import org.junit.AfterClass;
import org.junit.runner.RunWith;
import org.junit.runners.Suite;
import org.junit.runners.Suite.SuiteClasses;

@RunWith(value = Suite.class)
@SuiteClasses(value = { com.colosa.qa.automatization.tests.TestValidate.ValidateFieldsTest.class})
public class TestValidate {
    @AfterClass public static void tearDownClass() {
        //browserInstance.quit();
    }

}
