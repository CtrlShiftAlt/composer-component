# composer-component

# func system
disable_functions: Open your php.ini configuration file and check if the system function is listed in the disable_functions directive.
safe_mode: Locate the safe_mode directive in your php.ini file and set it to Off. If safe_mode is enabled, it may restrict the usage of the system() function.

# 编译成 macos
SET CGO_ENABLED=0
SET GOOS=darwin
SET GOARCH=amd64
go build -o bin/mac/a ./go.go
# 编译成 linux
SET CGO_ENABLED=0
SET GOOS=linux
SET GOARCH=amd64
go build -o bin/linux/a ./go.go
# 编译成 windows
SET CGO_ENABLED=0
SET GOOS=windows
SET GOARCH=amd64
go build -o bin/windows/a.exe ./go.go

# linux 和 macos 编译方法
CGO_ENABLED=0 GOOS=linux GOARCH=amd64 go build
CGO_ENABLED=0 GOOS=darwin GOARCH=amd64 go build
CGO_ENABLED=0 GOOS=windows GOARCH=amd64 go build