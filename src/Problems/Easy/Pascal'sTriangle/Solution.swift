class Solution {
    func generate(_ numRows: Int) -> [[Int]] {
        if numRows <= 0 { return [] }
        if numRows == 1 { return [[1]] }

        var result = [[Int]]()
        result.reserveCapacity(numRows)

        result.append([1])

        for x in 1..<numRows {
            var newRow = [1]
            let prevRow = result[x - 1]

            for j in 1..<prevRow.count {
                let sum = prevRow[j] + prevRow[j - 1]
                newRow.append(sum)
            }

            newRow.append(1)
            result.append(newRow)
        }

        return result
    }
}
