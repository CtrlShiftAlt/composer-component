package main

import (
	"fmt"
	"log"
	"os"
)

func main() {
	MakeDir("dir1/dir2/dir3")
	fmt.Println("Hello Go")
}

func MakeDir(dirPath string) {
	err := os.MkdirAll(dirPath, os.ModePerm)
	if err != nil {
		log.Fatal(err)
	}
}
