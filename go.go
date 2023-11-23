package main

import (
	"fmt"
	"log"
	"os"
)

func main() {
	MakeDir("cctv/abc")
	fmt.Println("Hello Go")
}

func MakeDir(dirPath string) {
	err := os.MkdirAll(dirPath, os.ModePerm)
	if err != nil {
		log.Fatal(err)
	}
}
