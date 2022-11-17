{ pkgs }: {
	deps = [
    (pkgs.php81.buildEnv {
      extensions = { all, ... }: with all; [ yaml swoole curl pdo_sqlite];
    	extraConfig = "
        error_reporting=On
      ";
    })

    pkgs.php81.extensions.curl
    pkgs.php81.extensions.yaml
    pkgs.php81.extensions.swoole
    pkgs.php81.packages.composer
    pkgs.php81.extensions.pdo_sqlite
	pkgs.gcc
	];
}