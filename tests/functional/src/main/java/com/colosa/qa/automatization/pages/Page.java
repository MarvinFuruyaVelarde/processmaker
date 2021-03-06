package com.colosa.qa.automatization.pages;

import com.colosa.qa.automatization.common.BrowserInstance;

public abstract class Page{
	protected String url;
	protected String pageTitle;
    protected BrowserInstance browser;

	public Page(BrowserInstance browser) throws Exception  {
        this.browser = browser;

		//init implicit wait time
        browser.setImplicitWait(30);

		url = "";
		pageTitle = "";	
		//Logger.addLog("Page contructor....:" + url);
	}

    /**
     * Go to default URL server
     */
	public void gotoUrl(String url){
        this.url = url;
		//Logger.addLog("Page.Goto url:" + url);
        this.browser.gotoUrl(url);
		//Logger.addLog("Browser.goto url:" + url);
	}

	public boolean isAt(){
		return (this.browser.title() == pageTitle);
	}

    public abstract void verifyPage() throws Exception;
}