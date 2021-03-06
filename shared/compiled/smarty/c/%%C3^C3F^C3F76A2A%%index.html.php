<?php /* Smarty version 2.6.18, created on 2017-05-19 10:56:54
         compiled from D:%5Cxampp%5Chtdocs%5Cdesign%5Cworkflow%5Cengine%5Ctemplates/oauth2/index.html */ ?>
<!doctype html>
<html>
<head>
    <title>ProcessMaker Oauth2 Server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style sheets -->
    <link rel="stylesheet" type="text/css" href="/assets/css/pure-min.css">
    <link rel="stylesheet" href="/assets/css/base-min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/grids-responsive-min.css">
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/oauth2.css">
</head>
<body>
<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <hgroup>
                <h2 class="brand-title">ProcessMaker</h2>
                <h3 class="brand-tagline">Authorization Server</h3>
                <h4 class="brand-tagline">OAuth v2</h4>
            </hgroup>

            <!--<nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="#">AAA</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="#">BBB</a>
                    </li>
                </ul>
            </nav>-->
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Authorization Code</h1>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">Authorization Code</h2>

                        <p class="post-meta">
                            See RFC <a href="http://tools.ietf.org/html/rfc6749#section-4.1" target="_blank" class="post-author">Authorization Code Grant</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            The authorization code grant type is used to obtain both access tokens and refresh tokens and is optimized for
                            confidential clients.<br/>

                        <ol>
                            <li>
                                Register the application
                                <pre>
  GET <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth2/apps</pre>
                            </li>
                            <li>
                                Request Authorization
                                <pre>
  GET <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth2/authorize?response_type=code&client_id=<?php echo '{the-client-id}'; ?>
&scope=*</pre>
                            </li>
                            <li>
                                Exchange Authorization code by an Access Token.

                                <pre>
  POST <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth2/token
  Authorization: Basic eC1wbS1sb2NhbC1jbGllbnQ6MTc5YWQ0NWM2Y2UyY2I5N2NmMTAyOWUyMTIwNDZlODE=

  grant_type=code&
  code=<?php echo '{the-authorization-code}'; ?>

</pre>
                            </li>
                        </ol>


                        <p><a id="authcode" href="<?php echo $this->_tpl_vars['auth_code_link']; ?>
"><?php echo $this->_tpl_vars['auth_code_link']; ?>
</a></p>
                        </p>
                    </div>
                </section>

                <h1 class="content-subhead">Implicit Grant</h1>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">Implicit Grant</h2>

                        <p class="post-meta">
                            See RFC <a href="http://tools.ietf.org/html/rfc6749#section-4.2" target="_blank" class="post-author">Implicit Grant</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            The implicit grant type is used to obtain access tokens (it does not support the issuance of refresh tokens) and
                            is optimized for public clients known to operate a particular redirection URI.

                            <pre>GET <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth2/authorize?response_type=token&client_id=<?php echo '{the-client-id}'; ?>
&scope=*</pre>
                    </div>
                </section>

                <h1 class="content-subhead">Resource Owner Password Credentials</h1>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">Resource Owner Password Credentials</h2>

                        <p class="post-meta">
                            See RFC <a href="http://tools.ietf.org/html/rfc6749#section-4.3" target="_blank" class="post-author">Resource Owner Password Credentials</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            The resource owner password credentials grant type is suitable in cases where the resource owner has a trust
                            relationship with the client, such as the device operating system or a highly privileged application.<br/><br/>

                            <pre>
  POST <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth2/token 
  Content-Type: application/x-www-form-urlencoded
  Authorization: Basic eC1wbS1sb2NhbC1jbGllbnQ6MTc5YWQ0NWM2Y2UyY2I5N2NmMTAyOWUyMTIwNDZlODE=

  grant_type=password&
  username=bob&
  password=secret&
  scope=*
                </pre>
                        </p>

                    </div>
                </section>

                <h1 class="content-subhead">Client Credentials</h1>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">Client Credentials</h2>

                        <p class="post-meta">
                            See RFC <a href="http://tools.ietf.org/html/rfc6749#section-4.4" target="_blank" class="post-author">Client Credentials</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            The client can request an access token using only its client credentials (or other supported means of authentication)
                            when the client is requesting access to the protected resources under its control, or those of another resource
                            owner that have been previously arranged with the authorization server. <br/><br/>

                            <pre>
  POST <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth/2/token 
  Content-Type: application/x-www-form-urlencoded
  Authorization: Basic eC1wbS1sb2NhbC1jbGllbnQ6MTc5YWQ0NWM2Y2UyY2I5N2NmMTAyOWUyMTIwNDZlODE=

  grant_type=client_credentials
            </pre>
                        </p>
                    </div>
                </section>

                <h1 class="content-subhead">Refresh Token</h1>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">Refresh Token</h2>

                        <p class="post-meta">
                            See RFC <a href="http://tools.ietf.org/html/rfc6749#section-1.5" target="_blank" class="post-author">Refresh Token</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            Refresh tokens are credentials used to obtain access tokens.  Refresh
                            tokens are issued to the client by the authorization server and are
                            used to obtain a new access token when the current access token
                            becomes invalid or expires, or to obtain additional access tokens
                            with identical or narrower scope (access tokens may have a shorter
                            lifetime and fewer permissions than authorized by the resource
                            owner).  Issuing a refresh token is optional at the discretion of the
                            authorization server.  If the authorization server issues a refresh
                            token, it is included when issuing an access token. <br/><br/>

                            <pre>
  POST <?php echo $this->_tpl_vars['host']; ?>
/<?php echo $this->_tpl_vars['workspace']; ?>
/oauth2/token 
  Content-Type: application/x-www-form-urlencoded
  Authorization: Basic eC1wbS1sb2NhbC1jbGllbnQ6MTc5YWQ0NWM2Y2UyY2I5N2NmMTAyOWUyMTIwNDZlODE=

  grant_type=refresh_token
  refresh_token=<?php echo '{your-refresh-token}'; ?>

            </pre>
                        </p>


                    </div>
                </section>
            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal pure-menu-open">
                    <ul>
                        <li><a href="http://processmaker.com/">ProcessMaker</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>