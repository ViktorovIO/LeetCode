package main

import "fmt"

func main() {
    isValid("{}[]()")
    isValid("{([])}")
}

func isValid(s string) bool {
	pairsArray := make(map[string]string)
	pairsArray["}"] = "{"
	pairsArray[")"] = "("
	pairsArray["]"] = "["

	runeArray := []rune(s)
	symCount := len(runeArray)
	if symCount%2 != 0 {
		return false
	}

	stack := make([]string, symCount/2)

	for _, element := range s {
		string := string(element)
		_, ok := pairsArray[string]
		if ok == false {
			stack = append(stack, string)
			continue
		}

		if checkElement(stack, string, pairsArray) {
			stack = removeElement(stack)
		} else {
			return false
		}
	}

	return stack[len(stack)-1] == ""
}

func checkElement(s []string, v string, pairsArray map[string]string) bool {
	return s[len(s)-1] == pairsArray[v]
}

func removeElement(s []string) []string {
	s = s[:len(s)-1]

	newSlice := make([]string, len(s))
	newSlice = s

	return newSlice
}