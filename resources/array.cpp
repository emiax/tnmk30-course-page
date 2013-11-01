#include <iostream>
using namespace std;

void printArray(int array[], int length)
{
  for (int i = 0; i < length; i++) {
    cout << array[i] << " ";
  }
  cout << endl;
}

int main() {
  int foo[] = {1, 3, 3, 7};
  printArray(foo, 4);
}
