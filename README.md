# composer-component

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