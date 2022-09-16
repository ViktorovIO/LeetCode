class Solution {
public:
    int reverse(int x) {
        int reverse = 0, temp;

        while (x != NULL)
        {
            temp = x % 10;
            if (reverse > INT_MAX / 10 || (reverse == INT_MAX / 10 && temp > 7)) {
                return 0;
            } else if (reverse < INT_MIN / 10 || (reverse == INT_MIN / 10) && temp < -7) {
                return 0;
            }

            reverse = reverse * 10 + temp;
            x /= 10;
        }

        return reverse;
    }
};